<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Event;
use Auth;

class UserController extends Controller
{
    public function profile(Request $request)
	{
		$user = Auth::user();

	    return view('users.profile', [
	    	'user' => $user,
	    ]);
	}
    public function view(Request $request, User $user)
	{
	    return view('users.view', [
	    	'user' => $user,
	    ]);
	}
}
