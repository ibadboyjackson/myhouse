<?php

namespace App\Http\Controllers\Promoter\Auth;

use App\Notifications\RegisterMember;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/promoteur/dashboard';


    public function __construct()
    {
        $this->middleware('guest');
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
        $user->notify(new RegisterMember());

        Session::flash('success', 'Votre compte a été crée mais doit être validé, un email vous a été envoyé');
        return redirect()->back();

        /*
        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
        */
    }



    /**
     * Show the application registration form.
     *
     * @return Response
     */
    public function showRegistrationForm()
    {
        return view('auth.promoter.register');
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
            'nom' => ['required', 'string', 'max:255'],
            'nom_dirigent' => ['required', 'string', 'max:255'],
            'siege_social' => ['required', 'string', 'max:255'],
            'site_web' => ['required', 'string', 'max:255'],
            'fonction_dirigent' => ['required', 'string', 'max:255'],
            'address_postal' => ['required', 'int'],
            'type_entreprise' => ['required', 'string', 'max:25'],
            'habit_affiliation' => ['required', 'string', 'max:4'],
            'affiliation_web' => ['required', 'string', 'max:4'],
            'telephone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
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
            'nom' => $data['nom'],
            'nom_dirigent' => $data['nom_dirigent'],
            'fonction_dirigent' => $data['fonction_dirigent'],
            'siege_social' => $data['siege_social'],
            'site_web' => $data['site_web'],
            'address_postal' => $data['address_postal'],
            'type_entreprise' => $data['type_entreprise'],
            'habit_affiliation' => $data['habit_affiliation'],
            'affiliation_web' => $data['affiliation_web'],
            'role_id' => 2,
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'confirmation_token' => str_replace('/', '', bcrypt(Str::random(16))),

        ]);
    }

    public function confirm($id, $token) {

        $user = User::where('id', $id)->where('confirmation_token', $token)->first();

        if ($user) {

            $user->update(['confirmation_token' => null]);

            $this->guard()->login($user);
            return redirect($this->redirectPath());
        }

        return abort(404);
    }
}
