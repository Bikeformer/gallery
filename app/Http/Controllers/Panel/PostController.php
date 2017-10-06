<?php

namespace App\Http\Controllers\Panel;

use App\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

class PostController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->latest()->select('id', 'img')->paginate();

        return view('panel.post.index', compact('posts'));
    }

    public function create()
    {
        return view('panel.post.create');
    }

    public function store(PostStoreRequest $request)
    {
        $this->post->fill(
                $request->only('description', 'img')
        )->save();

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('panel.post.edit', compact('post'));
    }

    public function update(PostUpdateRequest $request, Post $post)
    {
        $post->fill(
            $request->only('description', 'img')
        )->save();

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }

}
