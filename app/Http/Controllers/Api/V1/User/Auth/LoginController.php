<?php

namespace App\Http\Controllers\Api\V1\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request): string
    {
        if (! Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'UnAuthenticated!',
            ]);
        }
        return response()->json([
           'token' => Auth::user()->createToken('AccessToken')->accessToken,
            'user' => Auth::user()->user_name
        ]);
    }
}
