<?php 

namespace Blog;
require "../../vendor/autoload.php";

interface FeedInterface
{
    public function displayFeed($user, $category);

    public function filterByCategory($post, $category);
}



?>