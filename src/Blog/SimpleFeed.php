<?php 

namespace Blog;
require "../../vendor/autoload.php";

class SimpleFeed implements FeedInterface
{
    private $allPosts;

    public function __construct(array $allPosts)
    {
        $this->allPosts = $allPosts;
    }

    public function displayFeed()
    {
        //call filter the other 2 filter methods
        //loop thru filtered list
        // print_r($this->allPosts);
        foreach ($this->allPosts as $post) {
            // echo "test";
            // Display or process each post
            echo "Post: " . $post->getContent() . "\n";
        }
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

$post = BlogPostFactory::createBlogPost("title", "content1", "justin", "category", "today", "user");
$post1 = BlogPostFactory::createBlogPost("title1", "content2", "justin", "category", "today", "user");
$post2 = BlogPostFactory::createBlogPost("title2", "content3", "justin", "category", "today", "user");
$post3 = BlogPostFactory::createBlogPost("title3", "content4", "justin", "category", "today", "user");
$storage = new FeedStorage();
$storage->addPost($post);
$storage->addPost($post1);
$storage->addPost($post2);
$storage->addPost($post3);
// print_r($storage);
$simpleFeed = new SimpleFeed($storage->getPosts());
$simpleFeed->displayFeed();

?>