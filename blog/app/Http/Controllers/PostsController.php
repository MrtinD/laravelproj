<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;



class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();
        //return view('posts.index')->with('asd', $posts);
        $posts=Post::all();
        return view('posts.post',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request) the right way but the bottom one for practice
    public function store()
    {
        //Create new post using request

        //Save it to the database

        //Redirect somewhere after pressing button etc.
        //$post = new \App\Post; \ before app - begin at the root

        //alternative way to send post requests to server without creating object
        /* #1 see Post.php
        *
        *Post::create([
        *    'the name of the field in the database' => 'the form name attribute name = "asdf"'
        *    'title'=>'asdf'
        *]);
        */
        //we validate forms this way
        $this->validate(request(),[
            // we can add multiple things next to required|maxsize ... etc validations for 
            'asdtitle'=>'required',
            'asdbody'=>'required',

        ]);
        $post = new Post;
        $post->title=request('asdtitle');
        $post->body=request('asdbody');
        $post->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singlepost = Post::find($id);
        return view('posts.show')->with('singlepost',$singlepost);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
