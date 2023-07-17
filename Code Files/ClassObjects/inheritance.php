<?php
    class circle{
        protected $radius;

        function __construct($radius){
            $this->radius = $radius;
        }

        function area(){
            return pi() * pow($this->radius, 2);
        }
    }

    class cylinder extends circle{
        private $height;

        function __construct($radius, $height){
            parent::__construct($radius);
            $this->height = $height;
        }

        function volume(){
            return $this->area() * $this->height;
        }
    }

    $c = new circle(7);
    echo $c->area(),"<br>";
    $cyl = new cylinder(14, 8);
    echo $cyl->volume(),"<br>";
?>