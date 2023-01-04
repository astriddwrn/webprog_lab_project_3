<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class usersApiController extends Controller
{
    public function index()
    {
        $users = user::all();
        return response()->json([
            'user' => $users
        ]);
    }
}
