<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $page_title = "Testing Vue";
        $page_content = "This is the testing of the inertia-laravel-vue3 project";

    }
}
