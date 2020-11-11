<?php

namespace App\Http\Controllers\Conversations;

use App\Http\Requests\StoreMessageRequest;
use App\Repository\ConversationRepository;
use App\User;
use Illuminate\Auth\AuthManager;
use App\Http\Controllers\Controller;

class ConversationController extends Controller
{

    /**
     * @var ConversationRepository
     */
    private $conversationRepository;
    /**
     * @var AuthManager
     */
    private $auth;

    public function __construct(ConversationRepository $conversationRepository, AuthManager $auth)
    {
        $this->middleware('auth');
        $this->conversationRepository = $conversationRepository;
        $this->auth = $auth;
    }

    public function index() {
        return view('conversations.conversation', [
            'users' => $this->conversationRepository->getUser(auth()->user()->id)
        ]);
    }

    public function show(User $user) {

        $me = $this->auth->user()->id;
        $message = $this->conversationRepository->getMessagesFor($me, $user->id)->paginate(5);
        $unread = $this->conversationRepository->unreadMessage($me);

        if (isset($unread[$user->id]))
        {
            $this->conversationRepository->readAllFrom($user->id, $me);
            unset($unread[$user->id]);
        }



        return view('conversations.show', [
            'users' => $this->conversationRepository->getUser($me),
            'user' => $user,
            'messages' => $message,
            'unread' => $unread
        ]);
    }

    public function store (StoreMessageRequest $request, User $user) {
        $this->conversationRepository->createMessage(
          $request->get('message'),
          auth()->user()->id,
          $user->id
        );
        return redirect()->back();
    }


}
