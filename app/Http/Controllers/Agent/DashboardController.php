<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
        $this->middleware('isPromoter');
        $this->middleware('isMember');
        $this->middleware('auth');
    }

    public function index () {
        return view('auth.agent.pages.dashboard');
    }
}
