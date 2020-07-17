<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public  function login(Request $request){
        $credentials=$request->only("email","password");
        $token=null;
        if($token=JWTAuth::attenpt($credentials)){
            return response()->json([
                "stauts"=>false,
                "message"=>"Unauthorized"
            ]);
        }
    }
}
