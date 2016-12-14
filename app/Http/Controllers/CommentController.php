<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        //todo: Add validation!
        auth()->user()->comment($post, $request->get('comment')); //metodo comment agregado en el modelo User
        return redirect($post->url);
    }
}