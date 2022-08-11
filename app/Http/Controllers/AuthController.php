<?php

namespace App\Http\Controllers;

// use App\User;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;
// use PHPOpenSourceSaver\JWTAuth;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function register () {
        $validator = Validator::make(request()->all(), [
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($validator -> fails()) {
            return response()-> json($validator->messages());
        }

        $user = User::create([
            'name' => request('name'),
            'username' => request('username'),
            'password' => Hash::make(request('password')),
        ]);

        if ($user){
            return response()->json(['message' => 'Register Successfully']);
        } else {
            return response()->json(['message' => 'Register Failed']);
        }
    }


                    /**Cara Zidan*/
    // public function register (Request $request){
    //     $validator = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:user',
    //         'password' => 'required'
    //     ]);

    //     $user = User::create([
    //         'name' => $validator['name'],
    //         'email' => $validator['email'],
    //         'password' => Hash::make($validator['password']), 
    //     ]);
    //     if ($user) {
    //         return response()->json(['message' => 'Register Successfully']);
    //     } else {
    //         return response()->json(['message' => 'Register Failed']);
    //     }
    // }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['username', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
     // Get JWT Token from the request header key "Authorization"
     $token = $request->header("Authorization");
     // Invalidate the token
     try {
        JWTAuth::invalidate(JWTAuth::getToken());
        auth()->logout();
         return response()->json([
             "status" => "success", 
             "message"=> "User successfully logged out."
         ]);
     } catch (JWTException $e) {
         // something went wrong whilst attempting to encode the token
         return response()->json([
         "status" => "error", 
         "message" => "Failed to logout, please try again."
         ], 500);
     }
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
