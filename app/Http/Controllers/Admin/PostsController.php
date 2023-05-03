<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Str;
use App\Services;
use App\Services\PostService;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostsController extends Controller
{
    /** Post Services */
    public $postService;
    public $postRepository;

    public function __construct(PostService $postService, PostRepositoryInterface $postRepository)
    {
        $this->postService = $postService;
        $this->postRepository = $postRepository;
    }
    /** end post servises */

    public function index()
    {
        $posts = $this->postRepository->getAll();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all(); // mvc
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    public function store(PostStoreRequest $request)
    {
        $this->postService->store($request);
        return redirect()->route('admin.posts.index')->with('success', 'Post  successfully!');
    }

    public function show(Post $post)
    {
        $tags = Tag::all();
        return view('admin.posts.show', compact('post', 'tags'));
    }

    public function edit(Post $post)
    {
        $categories = Category::paginate(10);
        $tags = Tag::paginate(10);
        return view('admin.posts.edit', compact('post','categories', 'tags'));
    }

    public function update(PostUpdateRequest $request, Post $post)
    {
        $this->postService->update($request, $post);
        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully!');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully!');
    }

    public function upload(Request $request)
    {
        $this->postService->upload($request);
    }
}
