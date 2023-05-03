<?php

namespace App\Repositories;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Models\Post;

class PostRepository implements PostRepositoryInterface {

    public function getAll()
    {
        return Post::paginate(5);
    }

    public function getSpecialPosts()
    {
        return Post::where('is_special', 1)->limit(6)->latest()->get();
    }

    public function getLatestPosts()
    {
       return Post::limit(6)->latest()->get();
    }


}


?>
