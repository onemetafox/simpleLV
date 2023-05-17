<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $page_info['title'] = 'Users List';
        $page_info['active_menu'] = 'users';
        return Inertia::render('user/List', ['users' => $users])->withViewData(['meta' => $page_info]);;
    }    
}
