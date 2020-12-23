<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller as Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::orderBy('name', 'ASC')->paginate(10);
        return view('Users.index', compact('request', 'users'));
    }
    
}