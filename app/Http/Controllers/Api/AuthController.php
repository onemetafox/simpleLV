<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Auth;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function register(Request $request){
        $data = $request->all();
        $user = Auth::where('email', $data['email'])->get();
        if(sizeof($user)){
            $res['msg'] = 'User already registered!';
            $res['success'] = false;
        }else{
            $data['password']= md5($data['password']);
            unset($data['cfmpwd']);
            $id = Auth::create($data);
            if($id){
                $res['msg'] = "User succesfully registered!";
                $res['success'] = true;
            }else{
                $res['msg'] = "Registered faild!";
                $res['success'] = false;
            }
        }
        return response()->json($res);
    }
}
