<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Idea;
use Auth;

class UserController extends Controller
{
    public function profile(Request $request, User $user)
	{
		$user = (!$user) ? Auth::user() : $user;

	    return view('users.profile', [
	    	'user' => $user,
	    ]);
	}
}
