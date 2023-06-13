<?php 

namespace Blog;

class BlogPostManager
{
    public function editBlogPost(BlogPost $post, $newTitle, $newContent)
    {
        if ($post->isDeleted) {
            echo "cannot edit deleted post";
            return;
        }
        $post->setTitle($newTitle);
        $post->setContent($newContent);
    }

    public function deleteBlogPost(BlogPost &$post)
    {
        $post->isDeleted = true;
        #unset($post);
    }
}

?>