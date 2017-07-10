<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
     public function index()
    {
        // $user = DB::table('users')
        // ->get();
        $user = User::paginate(10);
        return view('user.index', compact('user'));
    } 
}
