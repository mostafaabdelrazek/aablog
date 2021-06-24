<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;
use Session;
use Purifier;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderby('id' , 'asc')->paginate(5);
        return view('posts.index')->withPosts($posts);
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
    public function store(Request $request)
    {
        //validate request 
        $this->validate($request , array(
            'title' => 'required|max:100|min:3',
            'slug'  => 'required|alpha_dash|max:255|min:3|unique:posts,slug',
            'body'  =>  'required|min:20'
        ));
        //create a new object and fill request data into
        $post = new Post();
        $post->title    = $request->title;
        $post->body     = Purifier::clean($request->body);
        $post->slug     = $request->slug;
        //save the new object to database
        $post->save();
        //send success message to the front-user
        Session::flash('success' , 'Blog created successfully');
        //return to the view
        return redirect()->route('posts.show' , $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //validate request
        $this->validate($request , [
            'title' => 'required|max:100|min:3',
            'slug'  => "required|alpha_dash|max:255|min:3|unique:posts,slug,$post->id",
            'body'  =>  'required|min:20'
        ]);
        $post->title    = $request->title;
      $post->body     = Purifier::clean($request->body);
        $post->slug     = $request->slug;
        $post->save();

        Session::flash('success' , 'Post Updated');
        return view('posts.show')->withPost($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {

        $post->delete();
        Session::flash('success' , 'the post deleted succefuly ');
        return redirect()->route('posts.index');
    }
}
