<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Create a post
    public function store(Request $request)
    {
        try{
            $data = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
            ]);

            $data['created_at'] = now();

            $post = Post::create($data);

            return sendResponseWithData('post', $post, true, 'Create Successfully', 201);
        }catch(\Throwable $th){
            return sendResponseWithMessage(false, $th->getMessage(), 500);
        }

    }

    
}
