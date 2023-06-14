<?php 

namespace Blog;
require "../../vendor/autoload.php";

class SimpleFeed implements FeedInterface
{
    use UserFilterTrait;
    private $allPosts;

    public function __construct(array $allPosts)
    {
        $this->allPosts = $allPosts;
    }

    public function displayFeed($user, $category = null)
    {
        foreach ($this->allPosts as $post) {
            if ($this->filterByUser($post, $user)) {
                echo "Post: " . $post->getContent() . "\n";
                echo "Category: " . $post->getCategory() . "\n";
            }
        }
    }

    public function filterByCategory($post, $category)
    {
        //do nothing in simple feed bc no filtering
        return;
    }
}

$user1 = UserFactory::createUser('justin', 'pass', 'email.com');
$user2 = UserFactory::createUser('ivan', 'pass', 'email.com');
$post = BlogPostFactory::createBlogPost("title", "justins post", $user1, "funny", "today", "user");
$post1 = BlogPostFactory::createBlogPost("title1", "ivan post", $user2, "funny", "today", "user");
$post2 = BlogPostFactory::createBlogPost("title2", "justins post", $user1, "funny", "today", "user");
$post3 = BlogPostFactory::createBlogPost("title3", "ivan post", $user2, "horror", "today", "user");
$storage = new FeedStorage();
$storage->addPost($post);
$storage->addPost($post1);
$storage->addPost($post2);
$storage->addPost($post3);
// print_r($storage);
$simpleFeed = new SimpleFeed($storage->getPosts());
$simpleFeed->displayFeed($user2, "funny");

?>