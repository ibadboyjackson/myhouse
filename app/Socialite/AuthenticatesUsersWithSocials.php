<?php

namespace App\Socialite;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

trait AuthenticatesUsersWithSocials {

    /**
     * Redirect the user to the social authentication page.
     *
     * @param Request $request
     * @return Response
     */
    public function redirectToProvider(Request $request)
    {
        return putSocialDriver($request)->redirect();
    }

    /**
     * Obtain the user information from the social.
     * @param Request $request
     * @param User $user
     * @return
     */
    public function handleProviderCallback(Request $request, User $user)
    {
        $user_social = putSocialDriver($request)->user();

        if ($user_social) {

            $user = $user->where('email', $user_social->email)->first();

            if($user) {
                $this->guard()->login($user);
                putSessionMessage('success', __('message/message.google'));
                return redirect($this->redirectPath());
            }

            putSessionMessage('email', __('message/message.googleFail'));
            return redirect()->route('login');
        }
        return abort(404);
    }
}
