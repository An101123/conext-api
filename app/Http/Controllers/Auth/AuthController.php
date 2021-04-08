<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SocialRequest;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    /**
     * @OA\Post(
     *     tags={"Login"},
     *     path="/api/auth/login",
     *     summary="Login with a email and password",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="email",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="password",
     *                     type="string"
     *                 ),
     *                 example={"email": "thian200298@gmail.com", "password": "123123123"}
     *             )
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *                 @OA\Schema(
     *                     @OA\Property(
     *                         property="errcode",
     *                         type="integer",
     *                         description="The response code"
     *                     ),
     *                     @OA\Property(
     *                         property="errmsg",
     *                         type="string",
     *                         description="The response message"
     *                     ),
     *                     @OA\Property(
     *                         property="data",
     *                         type="array",
     *                         description="The response data",
     *                         @OA\Items
     *                     ),
     *                     example={
     *                         "errcode": 1,
     *                         "errmsg": "ok",
     *                         "data": {
     *                              "email": "thian200298@gmail.com",
     *                              "password": "123123123"
     *                          }
     *                     }
     *                 )
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Login type not found",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     )
     * )
     */
    public function login(LoginRequest $request)
    {
        $input = $request->all();
        $token = null;
        if (!$token = JWTAuth::attempt($input)) {
            return response()->json(['message' => 'Invalid Email or Password'], 401);
        }
        dd($token);

        return $this->createNewToken($token);
    }

    public function social(SocialRequest $request, $provider)
    {
        if ($provider == 'google') {
            // TODO
            // return $this->checkGoogle($request->social_token);
        }

        if ($provider == 'facebook') {
            return $this->checkFacebook($request->social_token);
        }
    }

    public function checkFacebook($social_token)
    {
        $response = Http::get('https://graph.facebook.com/v3.1/me', [
            'fields' => 'id,name,email',
            'access_token' => $social_token,
        ]);

        if ($response->status() == 200) {
            $responseFacebook = $response->json();
            return $this->checkUserByEmail($responseFacebook);
        } else {
            return response()->json(['message' => 'Login failed!'], 401);
        }
    }

    /**
     * @param $profile
     * @return void
     */
    public function checkUserByEmail($profile)
    {
        $user = User::where('email', $profile['email'])->first();
        if (!$user) {
            $user = User::create([
                'name' => $profile['name'],
                'email' => $profile['email'],
                'password' =>Hash::make(Str::random(8)),
            ]);
            $user->save();
        }
        $token = JWTAuth::fromUser($user);
        return $this->createNewToken($token);
    }

    protected function createNewToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => 3600000,
            // 'user' => Auth::user()
        ]);
    }
    /**
     *
     * @OA\Get(
     *     tags={"Logout"},
     *     summary="Logout",
     *     path="/api/auth/logout",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *         ),
     *     ), 
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Bad Request",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Business not found",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Internal Server Error",
     *         content={
     *             @OA\MediaType(
     *                 mediaType="application/json",
     *             )
     *         }
     *     ),   
     *     security={
     *         {"bearer": {}}
     *     }
     * )
     */
    public function logout()
    {
        Auth::logout();
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(['message' => 'User successfully signed out']);
    }

    public function refresh()
    {
        return $this->createNewToken(Auth::refresh());
    }
}
