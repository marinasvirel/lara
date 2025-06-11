<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class Top extends Component
{
  public function render()
  {
    $posts = DB::table('posts')
      ->orderBy('likes', 'desc')
      ->take(5)
      ->get();

    return view('components.top', [
      'posts' => $posts,
    ]);
  }
}
