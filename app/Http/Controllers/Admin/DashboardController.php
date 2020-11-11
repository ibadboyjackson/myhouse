<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('isPromoter');
        $this->middleware('isAgent');
        $this->middleware('isMember');
        $this->middleware('auth');
    }


    public function index () {
        return view('admin');
    }

    public function add () {
        return view('add');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function post (Request $request) {
        $this->validate($request, ['nom' => 'required|string|min:3|max:25']);
        Role::create($request->all());

        Session::flash('success', 'Un nouveau role na été ajouté');
        return redirect()->route('admin.dashboard');
    }
}
