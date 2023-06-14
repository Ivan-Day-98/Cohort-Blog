<?php 

namespace Blog;
require "../../vendor/autoload.php";

class SimpleFeed implements FeedInterface
{
    public function displayFeed()
    {
        //call filter the other 2 filter methods
        //loop thru filtered list
    }

    public function filterByUser()
    {
        //if statement checking if proper user
    }

    public function filterByCategory()
    {
        //do nothing in simple feed bc no filtering
        return false;
    }
}

?>