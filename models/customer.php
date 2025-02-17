<?php
class customer {
    private $id;
    private $number;
    private $name;
    private $email;
    private $password;
    private $criteria;

    public function __construct($id, $number, $name, $email, $password, $criteria) {
        $this->id = $id;
        $this->number = $number;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password; // password hash?
        $this->criteria = $criteria; //array ook mogelijk?
    }

    //getters
    public function getId() {
        return $this->id;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getCriteria() {
        return $this->criteria;
    }

    //setters
    public function setNumber($number) {
        $this->number = $number;
    }
    
    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password; // hashen?
    }
    
    public function setCriteria($criteria) {
        $this->criteria = $criteria;
    }

    public function displayCustomer(){
        echo "ID: ". $this->id. "<br>";
        echo "Number: ". $this->number. "<br>";
        echo "Name: ". $this->name. "<br>";
        echo "Email: ". $this->email. "<br>";
        // echo "Criteria: ". implode(", ", $this->getCriteria()). "<br>";
        echo "Criteria: ". $this->criteria . "<br>";
        
    }

}

class order {
    private $id;
    private $number;
    private $date;
    private $address;
    private $postalCode;
}

class orderLine {
    private $orderID;
    private $itemID;
    private $quantity;
}

class item {
    private $id;
    private $number;
    private $name;
    private $price;
    private $stock;
    private $image;
    private $description;
    private $artist;
    private $genre;
    private $type;
}

?>