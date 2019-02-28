<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;

class PostController extends Controller
{
    public function all_post(){
    	// $post = Post::with('category','user')->get();
    	// return $post;
    	$category = Category::with('posts')->get();
    	return $category;
    }
}
