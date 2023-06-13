<?php 
namespace Blog;
require "../../vendor/autoload.php";
class BlogPostFactory
{
    public static function createBlogPost($title, $content, $author, $category, $creationDate, $user)
    {
        return new BlogPost($title, $content, $author, $category, $creationDate, $user);
    }
}

$post = BlogPostFactory::createBlogPost("title", "content", "justin", "category", "today", "user");
$manager = new BlogPostManager();
$manager->editBlogPost($post, "new title", "new content");
$manager->deleteBlogPost($post);
$manager->editBlogPost($post, "test123", "new content");
print_r($post);
?>