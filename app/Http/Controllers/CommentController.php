<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>'store']);
    }

    public function index()
    {

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


    public function store(Request $request,$post_id)
    {
        $this->validate($request,[
            'firstName' => 'required',
            'lastName' =>'required',
            'comment' =>'required|min:5|max:300'
        ]);

        $post = Post::find($post_id);

        $comment = new Comment;
        $comment->firstName = $request->firstName;
        $comment->lastName = $request->lastName;
        $comment->comment = $request->comment;
        $comment->accept = true;
        $comment->post()->associate($post);
        $comment->save();


        return redirect("/posts/{$post->id}")->with('success',"Комментарий добавлен!");

    }


    public function show($id)
    {
        $comment = Comment::find($id);
        return view('posts.show',compact('comment'));
    }


    public function edit($id)
    {
        $comment = Comment::find($id);

        return view('comments.edit',compact('comment'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'firstName' => 'required',
            'lastName' =>'required',
            'comment' =>'required|min:2|max:300'
        ]);

        $comment = Comment::find($id);
        $comment->firstName = $request->firstName;
        $comment->lastName = $request->lastName;
        $comment->comment=$request->comment;

        $comment->save();

        return redirect()->route('posts.show',$comment->post->id);
    }


    public function destroy($id)
    {
        $comment= Comment::find($id);
        $post_id=$comment->post->id;
        $comment->delete();
        return redirect()->route('posts.show',$post_id);
    }
}
