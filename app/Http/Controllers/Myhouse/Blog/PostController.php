<?php

namespace App\Http\Controllers\Myhouse\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function blog () {



        if (request()->get('click') === 'click') {
            session(['blogurl' => url()->previous()]);
        }

        return view('myhouse.front.pages.blog.post');
    }

    public function single () {
        return view('myhouse.front.pages.blog.single');
    }
}
