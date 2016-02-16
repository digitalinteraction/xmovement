<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Idea;

class PageController extends Controller
{
    public function home(Request $request)
	{
	    $ideas = Idea::take(3)->get();

	    return view('pages.home', ['ideas' => $ideas]);
	}
	
    public function about(Request $request)
	{
	    return view('pages.about');
	}
	
    public function contact(Request $request)
	{
	    return view('pages.contact');
	}
	
    public function terms(Request $request)
	{
	    return view('pages.terms');
	}
}
