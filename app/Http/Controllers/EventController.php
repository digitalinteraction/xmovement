<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Event;

class EventController extends Controller
{
    public function index(Request $request)
	{
	    $events = Event::get();

	    return view('events.index', [
	        'events' => $events,
	    ]);
	}

    public function view(Request $request, Event $event)
	{
	    return view('events.view', [
	    	'event' => $event,
	    ]);
	}

    public function add(Request $request)
	{
	    return view('events.add');
	}

	public function store(Request $request)
	{
	    $this->validate($request, [
	        'name' => 'required|max:255',
	        'description' => 'required|max:2000',
	        'photo' => 'required|max:255',
	    ]);

	    $request->user()->events()->create([
	        'name' => $request->name,
	        'description' => $request->description,
	        'photo' => $request->photo,
	    ]);

		return redirect()->action('EventController@index');
	}
}
