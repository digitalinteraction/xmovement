<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Event;

class PageController extends Controller
{
    public function home(Request $request)
	{
	    $events = Event::take(3)->get();

	    return view('pages.home', ['navtype' => 'navbar-transparent', 'events' => $events]);
	}
    public function about(Request $request)
	{
	    return view('pages.about', ['navtype' => 'navbar-transparent']);
	}
}
