<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Tag;
use App\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;


class FrontEndController extends Controller
{
    public function home(){
        $posts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->paginate(9);
        $recentPosts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->take(5)->get();
        // $firstPosts2 = $posts->splice(0, 2);
        // $middlePost = $posts->splice(0, 1);
        // $lastPosts = $posts->splice(0);

        // $footerPosts = Post::with('category', 'user')->inRandomOrder()->limit(4)->get();
        // $firstFooterPost = $footerPosts->splice(0, 1);
        // $firstfooterPosts2 = $footerPosts->splice(0, 2);
        // $lastFooterPost = $footerPosts->splice(0, 1);

        // $recentPosts = Post::with('category', 'user')->orderBy('created_at', 'DESC')->paginate(9);
        $categories = Category::all();
        $tags = Tag::all();
        return view('website.home', compact(['posts', 'recentPosts', 'categories', 'tags']));
    }
}
