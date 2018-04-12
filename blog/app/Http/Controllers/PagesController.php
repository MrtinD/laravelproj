<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //$title="Welcome to the Index Page!";
        //return view('pages.index',compact('title','asd'));
        //return view('pages.index')->with('title',$title);
        $posts=App\Post::all();
        return view('pages.index',compact('posts'));
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data=array(
            'title'=>'Services!',
            'services'=>['webserver','idkwhat','imconfused']
        );
        return view('pages.services')->with($data);
    }
}
