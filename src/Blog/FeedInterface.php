<?php 

namespace Blog;
require "../../vendor/autoload.php";

interface FeedInterface
{
    public function displayFeed();

    public function filterByUser();

    public function filterByCategory();
}

?>