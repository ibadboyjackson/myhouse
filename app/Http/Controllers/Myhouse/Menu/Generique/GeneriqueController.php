<?php

namespace App\Http\Controllers\Myhouse\Menu\Generique;

use App\Model\Generique\Contact;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GeneriqueController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except(['charte', 'faq']);
    }


    public function profile ($user) {
        return view('myhouse.back.includes.generique.profile')->with('user', $user);
    }

    public function contact ($user) {
        return view('myhouse.back.includes.generique.contact')->with('user', $user);
    }

    public function charte ($user) {
        return view('myhouse.back.includes.generique.charte')->with('user', $user);
    }

    public function faq ($user) {
        return view('myhouse.back.includes.generique.faq')->with('user', $user);
    }

    public function facture ($user) {
        return view('myhouse.back.includes.generique.facture')->with('user', $user);
    }

    public function messagerie ($user) {
        return view('myhouse.back.includes.generique.message')->with('user', $user);
    }


    public function updateUser (Request $request, $id) {


        $this->validator($request->all())->validate();

        $password = Hash::make($request->get('password'));

        $data = $request->all();

        unset($data['password']);

        $data['password'] = $password;

        $user = $this->update();

        $user->update([
            'nom' =>  $data[str_replace(' ', '_', __('myhouse/auth/inscription.ac'))],
            'ville' => $data[str_replace(' ', '_', __('myhouse/auth/inscription.ad'))],
            'telephone' => $data[str_replace(' ', '_', __('myhouse/auth/inscription.ae'))],
            'email' => $data[str_replace(' ', '_', __('myhouse/auth/inscription.ag'))],
            'pays' => $data[str_replace(' ', '_', __('myhouse/auth/inscription.ah'))],
            'password' => $data['password'],
        ]);




        putSessionMessage('statut', __('myhouse/auth/success.ac'));

        return  redirect()->back();
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
            str_replace(' ', '_', __('myhouse/auth/inscription.ag')) => ['required', 'string', 'email', 'max:255'],
            str_replace(' ', '_', __('myhouse/auth/inscription.ao')) => ['required', 'string', 'min:8'],
        ]);
    } 

    private function update () {
        return $user = User::where ('id', auth()->user()->id)->first();
    }

    public function postContact (Request $request) {

        $this->validate($request, [
            __('myhouse/back/menu/generique/contact.al') => 'required|max:30',
            str_replace(' ', '_',   __('myhouse/back/menu/generique/contact.am')) => 'required|min:10',
        ]);



        $data = $request->all();

        Contact::create([
           'sujet' => $data[__('myhouse/back/menu/generique/contact.al')],
           'contenu' => $data[str_replace(' ', '_',   __('myhouse/back/menu/generique/contact.am'))],
           'user_id' => auth()->user()->id
        ]);

        putSessionMessage('statut', __('myhouse/auth/success.ac'));

        return  redirect()->back();
    }


}
