<?php 

namespace Blog;
require "../../vendor/autoload.php";

class CategorizedFeed implements FeedInterface
{
    private $category;

    public function displayFeed()
    {
        //same as simple feed
    }

    public function filterByUser()
    {
        //same as simple feed 
    }

    public function filterByCategory()
    {
        //do filter logic
    }
}

?>