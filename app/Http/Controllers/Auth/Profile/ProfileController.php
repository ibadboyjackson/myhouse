<?php

namespace App\Http\Controllers\Auth\Profile;

use App\Http\Requests\UserRequest;
use App\Repository\UserRepository;
use Illuminate\Contracts\View\Factory;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * ProfileController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepository;
    }

    /**
     * @return Factory|View
     */
    public function index () {
        return view('auth.profile.index');
    }

    /**
     * @return Factory|View
     */
    public function edit () {
        return view('auth.profile.edit');
    }

    /**
     * @param UserRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function update (UserRequest $request, $id) {
        $this->userRepository->update($id, $request);
        putSessionMessage('success', __('profile/message.updated'));
        return redirect()->route('profile');
    }

    public function destroy ($id) {
        $this->userRepository->delete($id);
        putSessionMessage('success', __('profile/message.deleted'));
        return redirect()->route('login');
    }
}
