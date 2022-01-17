<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', '<>', 0)->get();

        return view('user.index', compact('users'));;
    }
    
    
}
