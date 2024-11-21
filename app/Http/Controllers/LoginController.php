<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function login(Request $request){

        $userData = $request->validate([
            'email' => 'required|string|email',
            'password' =>'required|min:8'

        ]);

        if(!Auth::attempt($request->all())){
            return response()->json(['error'=> 'Invalid Credentials']);
        }

        $user = Auth::user();
        $token = $user->createToken('API Token')->plainTextToken;

        return response()->json(['token'=> $token]);

       


    }

    public function register(Request $request){

        $userData = $request->validate([

            'name'=> 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' =>'required|min:8'

        ]);

        User :: create ([
            'name'=> $userData['name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password'])
        ]);

        return response()->json(['message'=> 'record successfully created']);


    }



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
}
