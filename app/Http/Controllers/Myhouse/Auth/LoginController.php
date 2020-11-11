<?php

namespace App\Http\Controllers\Myhouse\Auth;

use App\Http\Controllers\Controller;
use App\Repository\Back\Menu\Url\UrlRepository;
use App\Socialite\AuthenticatesUsersWithSocials;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers, AuthenticatesUsersWithSocials;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/connect/success';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function password()
    {
        return  __('myhouse/auth/connexion.ak');
    }



    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return  __('myhouse/auth/connexion.aj');
    }


    /**
     * Show the application's login form.
     * @param UrlRepository $urlRepository
     * @return Factory|View
     */
    public function showLoginForm(UrlRepository $urlRepository, $click = [])
    {
        
        if (request()->get('click') === 'click') {
            $urlRepository->setConnectUrl(url()->previous());
        }

        return view('myhouse.front.pages.auth.connexion');
    }


    /**
     * Get the needed authorization credentials from the request.
     *
     * @param Request $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return array_merge(
            $request->only($this->username(), $this->password()),
            ['confirmation_token' => null]
        );
    }
}
