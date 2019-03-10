<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Setting;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')
                    ->with('title', Setting::first()->site_name)
                    ->with('categories', Category::take(4)->get())
                    ->with('first_post', Post::orderBy('created_at', 'desc')->first())
                    ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
                    ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
                    ->with('python', Category::find(3))
                    ->with('php', Category::find(2))
                    ->with('settings', Setting::first());
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')->with('post', $post)
                             ->with('title', $post->title)
                             ->with('settings', Setting::first())
                             ->with('categories', Category::take(4)->get())
                             ->with('next', Post::find($next_id))
                             ->with('prev', Post::find($prev_id));
    }

    
}
