<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Post;
use App\Models\Account;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
//use DB;

class PostController extends Controller
{
    public function createPost()
    {
        $data2 = array();
        if(Session::has('loginId'))
        {
            $data2 = Account::where('id','=',Session::get('loginId'))->first();
        }
        
        return view('addPost', compact('data2'));
    }

    public function savePost(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
            'contents'=>'required'
        ]);

        $newImgName = uniqid().'-'.$request->title.'.'.$request->image->extension();

        $request->image->move(public_path('postImages'), $newImgName);

        Post::create([
            'title'=>$request->input('title'),
            'contents'=>$request->input('contents'),
            'slug'=>SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path'=>$newImgName,
            'acc_id'=>auth()->user->id
        ]);
    }





    public function getAll()
    {
        return view('/blogs')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }
    public function edit()
    {
    }
    public function delete()
    {
    }
}
