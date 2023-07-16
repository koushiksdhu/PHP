<?php

    class Book{
        var $title;
        var $author;
        var $wordCount;
    }

    $book1 = new Book;
    $book1->title = "Data Structure and Algorithms";
    $book1->author = "Koushik Sadhu";
    $book1->wordCount = 400;

    echo $book1->title,"<br>";
    echo $book1->author,"<br>";
    echo $book1->wordCount,"<br>";

?>