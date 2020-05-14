<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Auth;
use Illuminate\Facades\Support\Validator;

    

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foo = 5;
        $posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->Paginate(6);
        return view('welcome')->with('posts', $posts)->with('foo', $foo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'category' => 'required'
        ]);
        if($request->hasFile('img')){
            $name = Auth::user()->name;
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenamestored = $filename.'_'.time().'.'.$extension;
            $path = $request->file('img')->storeAs('public/'.$name, $filenamestored);
        }
        else {
            $filenamestored = 'noimage.png';
        }
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->image = $filenamestored;
        $post->category = $request->input('category');
        $post->user_id = Auth::user()->id;
        $post->save();
        
        return redirect('/')->with('success', 'Ilmoitus luotu.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
      /*  $this->validate($request, [
            'email' => 'required',
            'city' => 'required'
        ]);
        $user = User::find($id);
        $user->email = $request->input('email');
        $user->city = $request->input('city');
        $user->save();
        
        return redirect('/')->with('success','Tiedot muutettu onnistuneesti.');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/profiles/'.Auth::user()->id)->with('success', 'Ilmoitus poistettu.');
    }
}
