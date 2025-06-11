<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB; // подключаем фасад DB
use Illuminate\Http\Request; // подключим класс Request
use App\Models\User;

class PostController extends Controller
{
  public function all()
  {
    $posts = Post::all();
    return view('post.all', ['posts' => $posts]);
  }

  public function one($id)
  {
    $post = DB::table('posts')->where('id', $id)->first();
    return $post->slug;
  }
}
