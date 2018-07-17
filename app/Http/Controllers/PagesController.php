<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Gallery;


class PagesController extends Controller
{
    public function index()
    {
        $post = Post::take(4)->orderBy('created_at', 'DESC')->get();
    	return view('pages.home')->with('eventy', $post);
    }

    public function gallery()
    {   
        $gala = Gallery::orderBy('created_at', 'DESC')->get();
    	return view('pages.gallery')->with('galas', $gala);
    }

    public function event()
    {
    	return view('pages.event');
    }

     public function about()
    {
    	return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
