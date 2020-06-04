<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    public function index()
    {
        //$posts = Post::all();
        //$posts = Post::orderBy('title','asc')->get();
        $posts = DB::select('SELECT * from posts');
        return view('posts.index',compact('posts'));
    }


    public function create()
    {
        return view('posts.form');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=> 'required',
            'desc'=>'required',
            'img' =>'image|nullable|max:1999'
        ]);

        if($request->hasFile('img')){
            $fileImg = $request->file('img')->getClientOriginalName();
            $fileName=pathinfo($fileImg,PATHINFO_FILENAME);
            $exc = $request->file('img')->getClientOriginalExtension();
            $fileToStore = $fileName .'_'.time().'.'.$exc;
            $path = $request->file('img')->storeAs('public/img',$fileToStore);
        }else{
            $fileToStore='noImage.jpg';
        }

        $post = new Post;
        $post->title = $request->input('title');
        $post->desc = $request->input('desc');
        $post->user_id = auth()->user()->id;
        $post->img = $fileToStore;
        $post->save();

        return redirect('/posts')->with('success','Пост опубликован!');
    }


    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }


    public function edit($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts');
        }
        return view('posts.edit',compact('post'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=> 'required',
            'desc'=>'required',
            'img' =>'image|nullable|max:1999'
        ]);

        if($request->hasFile('img')){
            $fileImg = $request->file('img')->getClientOriginalName();
            $fileName=pathinfo($fileImg,PATHINFO_FILENAME);
            $exc = $request->file('img')->getClientOriginalExtension();
            $fileToStore = $fileName .'_'.time().'.'.$exc;
            $path  = $request->file('img')->storeAs('public/img',$fileToStore);
        }
        $post= Post::find($id);
        $post->title = $request->input('title');
        $post->desc = $request->input('desc');
        if($request->hasFile('img')){
            $post->img = $fileToStore;
        }
        $post->save();

        return redirect('/posts')->with('success','Пост обновлён!');
    }


    public function destroy($id)
    {
        $post= Post::find($id);
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts');
        }

        if($post->img !=='noImage.jpg'){
            Storage::delete('public/img/',$post->img);
        }
        $post->delete();
        return redirect('/posts')->with('success','Пост удален');
    }
}
