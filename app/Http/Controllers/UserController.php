<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return Inertia::render('user/List', compact('users'));
    }    
}
