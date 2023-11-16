<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();

        return response()->json(['users' => $users]);
    }
}
