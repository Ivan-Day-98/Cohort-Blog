<?php 
include("BlogPost.php");
class BlogPostFactory
{
    public static function createBlogPost($title, $content, $author, $category, $creatiionDate)
    {
        return new BlogPost($title, $content, $author, $category, $creatiionDate);
    }
}

$post = BlogPostFactory::createBlogPost("title", "content", "justin", "category", "today");
print_r($post);
?>