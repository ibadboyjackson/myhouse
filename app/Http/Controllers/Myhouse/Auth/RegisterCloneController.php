<?php

namespace App\Http\Controllers\Myhouse\Auth;

use App\Notifications\RegisterMember;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;

use App\Model\Professionnel\Promotion;

class RegisterCloneController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/menu/professionnel/backoffice';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application registration form.
     *
     */
    public function showRegistrationForm()
    {
        return view('myhouse.front.pages.auth.inscription');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            str_replace(' ', '_', __('myhouse/auth/inscription.ac')) => ['required', 'string', 'max:255', 'min:4'],
            str_replace(' ', '_', __('myhouse/auth/inscription.ad')) => ['required', 'string', 'max:255'],
            str_replace(' ', '_', __('myhouse/auth/inscription.ah')) => ['required', 'string', 'max:255'],
            str_replace(' ', '_', __('myhouse/auth/inscription.ae')) => ['required', 'string', 'max:55'],
            str_replace(' ', '_', __('myhouse/auth/inscription.ag')) => ['required', 'string', 'email', 'max:255', 'unique:users'],
            str_replace(' ', '_', __('myhouse/auth/inscription.ao')) => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    /**
     * Handle a registration request for the application.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function register(Request $request)
    {

        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));    
    
            
            return redirect()->back()->with('success', __('myhouse/help.ok'));

    }




    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nom' => $data[str_replace(' ', '_', __('myhouse/auth/inscription.ac'))],
            'ville' => $data[str_replace(' ', '_', __('myhouse/auth/inscription.ad'))],
            'pays' => $data[str_replace(' ', '_', __('myhouse/auth/inscription.ah'))],
            'telephone' => $data[str_replace(' ', '_', __('myhouse/auth/inscription.ae'))],
            'telephone_2' => $data[str_replace(' ', '_', __('myhouse/auth/inscription.ai'))],
            'email' => $data[str_replace(' ', '_', __('myhouse/auth/inscription.ag'))],
            'account_type' => $data['account_type'],
            'parent_id' => auth()->user()->id,
            'confirmation_token' => null,
            'password' => Hash::make($data[str_replace(' ', '_', __('myhouse/auth/inscription.ao'))]),
        ]);
    }


    public function promotion(Request $request) {

        
        Promotion::create($request->all());

        return redirect()->back()->with('success', __('myhouse/help.promotion'));


    }

}
