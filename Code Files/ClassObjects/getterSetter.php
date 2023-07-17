<?php
    class Square{
        private $side;

        function __construct($side){        // Parameterized Constructor
            $this->side = $side;
        }

        function setSide($side){            // Setter Method
            $this->side = $side;
        }

        function getSide(){                 // Getter Method
            return $this->side;
        }

        function area(){                    // Area Computation Method
            return $this->side * $this->side;
        }
    }

    $s1 = new Square(5);
    $s1->setSide(10);
    echo $s1->getSide(),"<br>";
    echo $s1->area(),"<br>";
?>