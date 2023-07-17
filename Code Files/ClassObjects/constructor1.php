<?php
    class Rectangle{
        var $length;
        var $breadth;

    function __construct($length, $breadth){       // Parameterized Constructor
        $this->length = $length;
        $this->breadth = $breadth;
        }
    }

    $r = new Rectangle(10, 40);
    echo $r->length,"<br>";
    echo $r->breadth,"<br>";

?>