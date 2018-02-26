<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postCreatePost(Request $request){
        //validation
        $post = new Post();
        $post->body = $request['body']; //Dans dashboard.blade : <textarea name="body"...>
        $request->user()->posts()->save($post);
        return redirect()->route('dashboard');
    }
}