<?php

namespace App\Http\Controllers\Myhouse\Auth;

use App\Http\Controllers\Controller;

class SuccessController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function success () {
        return view('myhouse.front.pages.auth.success');
    }


}
