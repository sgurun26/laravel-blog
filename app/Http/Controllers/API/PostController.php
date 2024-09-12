<?php

namespace App\Http\Controllers\API;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the all posts.
    */
    public function index()
    {
        $posts = Post::all();
        return response()->json([
            'data'=>$posts,
            'message'=>"success"
        ],200);
    }

        /**
     * Display the specified post.
     *
     * @param  int  $id
    */
    public function blogDetail($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'message' => "Post not found"
            ], 404);
        }

        return response()->json([
            'data' => $post,
            'message' => "success"
        ], 200);
    }
}
