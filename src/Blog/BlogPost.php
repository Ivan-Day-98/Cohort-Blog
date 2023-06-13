<?php 

namespace Blog;
require "../../vendor/autoload.php";
class BlogPost
{
    private $title;
    private $content;
    private $author;
    private $category;
    private $creationDate;
    private $user;
    public $isDeleted;
    
    public function __construct($title, $content, $author, $category, $creationDate, $user)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->category = $category;
        $this->creationDate = $creationDate;
        $this->user = $user;
        $this->isDeleted = false;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    public function checkIfDeleted()
    {
        return $this->isDeleted;
    }

}

?>