<?php
/*
 * This a personal helpers file created by Herman Jackson @ http://hermanjacksonfoutou.com
 */

use App\User;
use Illuminate\Support\Facades\Session;

if (! function_exists('putSessionMessage')) {

    /**
     * @param string $key
     * Put a simple message to a session after a simple action
     * @param string $message
     * @return mixed
     */
    function putSessionMessage (string $key, string $message) {

        return Session::flash($key, $message);
    }

}



if (! function_exists('userId')) {

    /**
     * Get user by id
     * @param int $id
     * @return mixed
     */
    function userId (int $id) {
        return User::findOrFail($id);
    }
}

if (! function_exists('putSocialDriver')) {

    /**
     * @param $request
     * @return bool
     */
    function putSocialDriver ($request) {

        $url = $request->url();
        $path = parse_url($url,  PHP_URL_PATH);

        if ($path === '/login/google' || $path = '/login/google/callback') {
            return Socialite::driver('google');
        }
        elseif ($path === '/login/facebook' || $path = '/login/facebook/callback')
        {
            return Socialite::driver('facebook');
        }
        else {
            return false;
        }
    }

}
