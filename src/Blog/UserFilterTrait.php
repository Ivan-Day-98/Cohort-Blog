<?php 

namespace Blog;

trait UserFilterTrait
{
    public function filterByUser($post, $user)
    {
        // Method implementation code here
        if ($post->getAuthor()->getUsername() == $user->getUsername()) {
            return true;
        }
        return false;
    }
}

?>