<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class BlogController extends Controller
{
	/**
	 * List all blog posts
	 *
	 * @return \Illuminate\Http\Response Response object
	 */
	public function index ()
	{
	    $posts = WinkPost::with('tags')
	        ->live()
	        ->orderBy('publish_date', 'DESC')
	        ->simplePaginate(12);

	    return view('blog.index', [
	        'posts' => $posts
	    ]);
	}

    /**
     * Show Details of a post
     *
     * @return \Illuminate\Http\Response Response
     */
    public function show (Request $request, $slug)
    {
		$post = WinkPost::with('tags')
	        ->live()
	        ->where('slug', $slug)
	        ->first();

	    if (! $post) {
	    	abort(404);
	    }

    	return view('blog.show', [
        	'post' => $post
    	]);
    }
}
