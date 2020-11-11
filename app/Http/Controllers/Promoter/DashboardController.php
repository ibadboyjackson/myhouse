<?php

namespace App\Http\Controllers\Promoter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('isAdmin');
        $this->middleware('isAgent');
        $this->middleware('isMember');
        $this->middleware('auth');
    }

    public function index () {
        return view('auth.promoter.pages.dashboard');
    }
}
