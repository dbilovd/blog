<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class BlogsAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $limit = $request->has('limit') ? $request->get('limit') : 3;
        $tags = $request->has('tags') ? $request->get('tags') : false;

        $fetchPosts = WinkPost::with('tags');

        if ($tags) {
            // dd($tags);
            $fetchPosts = $fetchPosts->whereHas('tags', function ($query) use ($tags) {
                $query->whereIn('slug', $tags);
            });
        }

        $posts = $fetchPosts->live()
            ->orderBy('publish_date', 'DESC')
            ->limit($limit)
            ->get();

        return response()->json([
            'posts' => $posts
        ]);
    }
}
