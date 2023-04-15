<?php 
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class Person {
        public $username;
        public $password;
        public $nameSurname;
    }
    $person1 = new Person;
    $person1->username = "adam";
    $person1->password = "adam2020";
    $person1->nameSurname = "Adam Kowalski";
    $person2 = new Person;
    $person2->username = "agata";
    $person2->password = "2020agata";
    $person2->nameSurname = "Agata Nowak";
        

?>