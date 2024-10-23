<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class HomePage extends Controller
{
  public function index()
  {
    return view('content.pages.pages-home');
  }
  public function frontPage()
  {
    $pageConfigs = ['myLayout' => 'blank'];
    $posts = Post::all();
    return view('content.pages.front-page', compact('pageConfigs','posts'));
  }
}
