<?php 

namespace Blog;
require "../../vendor/autoload.php";

class FeedStorage
{
    private $posts;

    public function __construct()
    {
        $this->posts = [];
    }

    public function addPost(BlogPost $post)
    {
        $this->posts[] = $post;
    }

    public function getPosts()
    {
        return $this->posts;
    }
}

?>