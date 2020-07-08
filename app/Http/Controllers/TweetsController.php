<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tweet;


class TweetsController extends Controller
{

	public function index()
    {

        return view('home', [
            'tweets' => auth()->user()->timeline()
        ]);
    }
    //storing user posts
	public function store()
	{	
		//validation
		$attributes = request()->validate(['body' => 'required|max:255' ]);

		Tweet::create([
			'user_id' => auth()->id(),
			'body' => $attributes['body']
		]);

		return redirect('/home');
	}

	
}
