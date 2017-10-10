<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($user){
    	$User = User::find($user);
    	return view('user', compact('User'));
    }
}
