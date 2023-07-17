<?php
    class Book{
        var $title;
        var $author;
        var $pages;

        function __construct($title, $author, $pages){              // Parameterized Constructor
            $this->title = $title;
            $this->author = $author;
            $this->pages = $pages;
        }
    }

    $book1 = new Book("Data Structure and Algorithm", "Koushik Sadhu", 400);
    echo $book1->title,"<br>";
    echo $book1->author,"<br>";
    echo $book1->pages,"<br>";    


?>