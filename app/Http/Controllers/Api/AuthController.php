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
        $user = Auth::where('email', $request->email)->get();
        if(!$user){
            $data['msg'] = 'User already registered!';
            $data['success'] = false;
            return response()->json($data);
        }else{
            $request['password'] = md5($request->password);
            unset($request->cfmpwd);
            $id = Auth::create((array)$request);
            if($id){
                $data['msg'] = "User succesfully registered!";
                $data['success'] = true;
            }else{
                $data['msg'] = "Registered faild!";
                $data['success'] = false;
            }
        }
        return response()->json($data);
    }
}
