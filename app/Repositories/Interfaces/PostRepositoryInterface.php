<?php

namespace App\Repositories\Interfaces;

interface PostRepositoryInterface{

    public function getAll();

    public function getSpecialPosts();

    public function getLatestPosts();

}



?>
