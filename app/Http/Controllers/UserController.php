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
        $page_info['detail'] = "Users Page";
        return Inertia::render('user/List', ['users' => $users, 'page_info' =>$page_info]);
    }

    public function show($id){
        $user = User::find($id);
        $page_info["title"] = "User Edit";
        $page_info['active_menu'] = 'users';
        $page_info['detail'] = "User Edit Page";
        return Inertia::render('user/Edit', ['user'=> $user, 'page_info' => $page_info]);
    }
}
