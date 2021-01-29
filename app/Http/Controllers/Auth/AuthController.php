<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function __construct() {
        // $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request){
        $input = $request->all();
        $token = null;
        if (! $token = JWTAuth::attempt($input)) {
            return response()->json(['message' => 'Invalid Email or Password']);
        }
        return $this->createNewToken($token);
    }
    protected function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => 36000,
            // 'user' => Auth::user()
        ]);
    }

    public function logout()
    {
        Auth::logout();
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(['message' => 'User successfully signed out']);
    }
    
    public function refresh() {
        return $this->createNewToken(Auth::refresh());
    }
}
