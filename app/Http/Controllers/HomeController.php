<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(Request $request){
        $page_title = "Testing Vue";
        $page_content = "This is the testing of the inertia-laravel-vue3 project";
        return Inertia::render('Landing', compact('page_title', 'page_content'));
    }

    public function login(){
        return Inertia::render('auth/Login');
    }
}
