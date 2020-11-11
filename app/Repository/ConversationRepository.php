<?php

namespace App\Repository;

use App\Model\Message;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class ConversationRepository {
    /**
     * @var User
     */
    private $user;
    /**
     * @var Message
     */
    private $message;


    /**
     * ConversationRepository constructor.
     * @param User $user
     * @param Message $message
     */
    public function __construct(User $user, Message $message)
    {
        $this->user = $user;
        $this->message = $message;
    }


    public function getUser (int $userId) {
        return $this->user->newQuery()->select('nom', 'id', 'role_id')->where('id', '!=', $userId)->get();
    }

    public function createMessage(string $content, int $from, int $to)
    {
        return $this->message->newQuery()->create([
            'message' => $content,
            'from_id' => $from,
            'to_id' => $to,
            'created_at' => Carbon::now()
        ]);
    }

    public function getMessagesFor(int $from, int $to): Builder
    {
        return $this->message->newQuery()
            ->whereRaw("( (from_id = $from AND to_id = $to) OR (from_id = $to AND to_id = $from))")
            ->orderBy('created_at', 'DESC')
            ->with([
                'from' =>
                    function($query)
                    {
                        return $query->select('nom', 'id');
                    }
            ]);
    }


    /**
     * @param int $user_id
     * Reccupère le nombre de messages non lus pour chaque conversation
     * @return Builder[]|Collection|\Illuminate\Database\Query\Builder[]|\Illuminate\Support\Collection
     */
    public function unreadMessage(int $user_id)
    {
        return $this->message->newQuery()
            ->where('to_id', $user_id)
            ->groupBy('from_id')
            ->selectRaw('from_id, COUNT(id) as count ')
            ->whereRaw('read_at IS NULL')
            ->get()
            ->pluck('count', 'from_id');
    }

    /**
     * @param int $from
     * @param int $to
     */
    public function readAllFrom(int $from, int $to)
    {
        $this->message->where('to_id', $to)
            ->where('from_id', $from)
            ->update(['read_at' => Carbon::now()]);
    }

}
