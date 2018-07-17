<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class EventController extends Controller
{
	public function event()
    {
    	$post = Post::all();
    	return view('pages.event')->with('posts', $post);
    }


    public function getEvent($slug)
    {
        $post = Post::where('slug', $slug)->first();

        if(!$post){
            abort(404);
        }else{
            return view('pages.eventSingle')->with('post', $post);
        }
    }
}
