<?php

namespace App\Http\Controllers;
use App\Models\History;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('profile', [
            'user' => $request->user(),
            'histories' => History::where('user_id','=' ,$request->user()->id)->get()
        ]);
    }
}
