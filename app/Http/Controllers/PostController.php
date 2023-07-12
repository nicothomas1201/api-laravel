<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
  public function index(){
    return view('index', [
      'posts' => Post::latest() -> paginate()
    ]);
  }

  public function findeOne(Request $request){
    var_dump($request);
    return view('blog', [
      'post' => Post::find(1)
    ]);
  }
}
