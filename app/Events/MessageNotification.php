<?php

namespace App\Events;

use App\Model\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessageNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var MessageNotification
     */
    private $message;

    /**
     * Create a new event instance.
     *
     * @param MessageNotification $message
     */
    public function __construct(MessageNotification $message)
    {
        //
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('App.User.' . $this->message->to_id);
    }

    public function broadcastWith () {
        return [
          'message' => $this->message->load([
              'from' => function ($query) {
                $query->select('id', 'nom', 'role_id');
              }
          ])->toArray()
        ];
    }
}
