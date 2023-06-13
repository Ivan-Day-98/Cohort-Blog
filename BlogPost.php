<?php 

class BlogPost
{
    private $title;
    private $content;
    private $author;
    private $category;
    private $creationDate;
    
    public function __construct($title, $content, $author, $category, $creationDate)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->category = $category;
        $this->creationDate = $creationDate;
    }
}

?>