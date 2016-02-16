<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Idea;
use Auth;
use Input;

use Illuminate\Http\Request;



class UserController extends Controller
{
    public function profile(Request $request, User $user)
	{
		if (is_null($user->id)) { $user = Auth::user(); }
		
		$supported_ideas = []; // TODO
		$created_ideas = Idea::where('user_id', $user->id)->get();

	    return view('users.profile', ['user' => $user, 'supported_ideas' => $supported_ideas, 'created_ideas' => $created_ideas]);
	}

    public function details(Request $request)
	{
		$user = Auth::user();

		if ($request->isMethod('get')) {

		    return view('users.details', ['user' => $user]);

		} else if ($request->isMethod('post')) {

		    $this->validate($request, [
		    	'name' => 'required|max:255',
	            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
		        'phone' => 'max:255',
		        'bio' => 'required|max:2000'
		    ]);

			$user->name = $request->name;
			$user->email = $request->email;
			$user->phone = $request->phone;
			$user->bio = $request->bio;
			$user->avatar = $request->photo;

			$user->save();

		    return redirect()->action('UserController@profile', $user->id);
		}
	}
}
