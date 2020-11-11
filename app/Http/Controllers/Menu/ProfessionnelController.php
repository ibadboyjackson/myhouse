<?php

namespace App\Http\Controllers\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessionnelController extends Controller
{
    public function backoffice () {
        return view('development.menu.professionnel.backoffice');
    }

    public function interesse () {
        return view('development.menu.professionnel.interesse');
    }
}
