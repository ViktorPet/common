<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Http\Controllers\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

       return $this->middleware('auth');
     }

     // public function dashboard(){
     //
     //   return view('admin.dashboard');
     // }

    public function index()
    {
        $posts = Post::all();

        //$data = $request->session()->all();
        // $value = session('key');
        // dd($value);

        return view('admin.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
      //  dd($comments);
        return view('admin.postcreate', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //  dd($request);
        $post = new Post;

        $category = new Category;

        $post->title = $request->get('title');
        $post->category_id = $request->get('id');
        $post->body = $request->get('body');
        $post->features = ($request->get('features') == "on")? 1: 0 ;

      //  dd($post);

        $post->save();


        return redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $categories = Category::all();

      //  dd($post);

        return view('/admin/postshow', compact('post','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
      $post = Post::find($id);

    //dd($post);

      return view('/admin/postedit', compact('post','categories'));
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

      $input = Post::find($id);


       $input->title    = $request->input('title');
       $input->category_id = $request->input('id');
       $input->body     = ($request->input('body') == null )? $input->body:$request->input('body') ;
       $input->features = ($request->input('features') == null)? 0 : 1;



       $input->save();

       //Session::flash('message', 'Successfully updated nerd!');
           return redirect('admin/posts');
     //}




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $post = Post::find($id);

      //   dd($post);

        $post->delete($id);

        $request->session('message', 'Successfully deleted the nerd!');
        return redirect('admin/posts');
    }
}
