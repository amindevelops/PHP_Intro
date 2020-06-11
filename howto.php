<?php

//Single line

$x = 1; //Inline comment

/*
 *  @param    int a   First number in sum
 *  @param    int b   Second number in sum
 *
 *  @return   int     Sum of both parameters  
 */
 function add($a, $b) {
   return $a + $b;
 }

/** OOP ****************************************************/

class Person {

  protected $name = '';
  protected $password = "catsanddogs";

  function __construct($given_name = "Baby") {
    $this->name = $given_name;
  }

  public function getName() {
    return $this->name;
  }

  public function getPassword() {
    return $this->password;
  }

  public function setPassword($new_pass) {
    $this->password = $new_pass;
  }
}

$paul = new Person(); //separate instance

$cara = new Person('Cara'); //separate instance

echo $paul->getName() . "\n";

//This is bad practice
echo $cara->password; //Should be using getter

// This is worse
$cara->password = "hahayoucantgetin"; //Should be using setter

//This is the correct way to change a value in an object
$cara->setPassword("password_changed");

// //Use the getter
echo $cara->getPassword();

