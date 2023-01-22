<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')){
            $category =  Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        } elseif (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }
        return view('blog' , [
            'title' => 'All post' . $title,
            'active' => 'blog',
            'posts' => Post::latest()->filter(request(['search' , 'category' , 'user']))->paginate(5)->withQueryString(),
            'sort' => Post::latest()->paginate(4),
            'categories' => Category::all(),
        ]);
    }

    public function show(Post $post){
        $user = $post->user->name;
        return view('blog_details' , [
            'title' => 'Single Post by ' . $user ,
            'post' => $post,
            'sort' => Post::latest()->paginate(4),
            'categories' => Category::all()
        ]);
    }
}
