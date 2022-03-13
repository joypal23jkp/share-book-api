<?php

namespace App\Http\Controllers\Api\V1\User;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    private $userRepository;

    public function index()
    {
       return User::all() ? User::all() : 'No User!';
    }
}
