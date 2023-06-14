<?php 

namespace Blog;
require "../../vendor/autoload.php";

class CategorizedFeed implements FeedInterface
{
    use UserFilterTrait;
    private $category;
    private $allPosts;

    public function __construct(array $allPosts)
    {
        $this->allPosts = $allPosts;
    }

    public function displayFeed($user, $category)
    {
        foreach ($this->allPosts as $post) {
            if ($this->filterByUser($post, $user) && self::filterByCategory($post, $category)) {
                echo "Post: " . $post->getContent() . "\n";
                echo "Category: " . $post->getCategory() . "\n";
            }
        }
    }

    public function filterByCategory($post, $category)
    {
        //do filter logic
        if ($post->getCategory() == $category) {
            return true;
        }
        return false;
    }
}

?>