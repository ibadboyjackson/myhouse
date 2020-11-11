<?php

namespace App\Http\Controllers\Api;

use App\Events\MessageComponent;
use App\Http\Requests\StoreMessageRequest;
use App\Model\Message;
use App\Repository\ConversationRepository;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ConversationController extends Controller
{

    /**
     * @var ConversationRepository
     */
    private $conversationRepository;

    public function __construct(ConversationRepository $conversationRepository)
    {
        $this->conversationRepository = $conversationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return array
     */
    public function index(Request $request)
    {
        $me = $request->user()->id;
        $conversations = $this->conversationRepository->getUser($me);
        $unread = $this->conversationRepository->unreadMessage($me);

        foreach ($conversations as $conversation) {

            if ( isset($unread[$conversation->id])) {

                $conversation->unread = $unread[$conversation->id];
            }else {

                $conversation->unread = 0;
            }
        }


        return [
           'conversations' => $conversations
        ];

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMessageRequest $request
     * @param User $user
     * @return array
     */
    public function store(StoreMessageRequest $request, User $user)
    {
        /** @var Message $message */

        $message = $this->conversationRepository->createMessage(
            $request->get('message'),
            $request->user()->id,
            $user->id
        );

        broadcast(new MessageComponent($message));

        return [
            'message' => $message
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param User $user
     * @return array
     */
    public function show(Request $request, User $user)
    {
        $me = $request->user()->id;
        $messageQuery = $this->conversationRepository->getMessagesFor($me, $user->id);
        $count = null;

        if ($request->get('before')) {
            $messageQuery = $messageQuery->where('created_at', '<', $request->get('before'));
        }else {
            $count = $messageQuery->count();
        }

        $messages = $messageQuery->limit(10)->get();

        foreach ($messages as $message) {
            if($message->read_at === null && $message->to_id === $me) {
                $this->conversationRepository->readAllFrom($message->from_id, $message->to_id);
                break;
            }
        }

        return [
          'messages' => array_reverse($messages->toArray()),
          'count' => $count
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
