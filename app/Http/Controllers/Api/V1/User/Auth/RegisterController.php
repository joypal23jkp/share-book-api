<?php

namespace App\Http\Controllers\Api\V1\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $success['token'] = $user->createToken('AccessToken')->accessToken;
        $success['name'] = $user->user_name;
        return response()->json([
            'Success' => $success,
            200
        ]);

    }
}
