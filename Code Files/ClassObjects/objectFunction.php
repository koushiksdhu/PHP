<?php
    class Student{
        var $name;
        var $major;
        var $gpa;

        // Parameterized Constructor:
        
        function __construct($name, $major, $gpa){
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        // Object Functions:

        function hasHonors(){
            if($this->gpa > 3.5)
                return "$this->name is having honors degree.<br>";
            else
                return "$this->name does not have honors degree.<br>";
        }
    }

    $s1 = new Student("Koushik Sadhu", "Information Technology", 9.45);
    echo $s1->hasHonors();
?>