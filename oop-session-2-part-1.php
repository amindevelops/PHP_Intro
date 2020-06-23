<?php

/*
 *  This is a general class of all fruits
 */

class Fruit {

  protected $name = '';
  
  function __construct ($name) {
    $this->name = $name;
  }
  
  public function message() {
    
    echo "\n\tI am a piece of fruit named $this->name\n\n";
  }

  //todo: capitalise name
}

/*
 *  This class is a specific fruit therefore INHERITS general fruit behaviour
 */
// class Mango extends Fruit {
//   protected $name = 'Mango';   
// }

// class Banana extends Fruit {
//   protected $name = 'Banana';
// }


// Version 1

// $fruit = new Fruit();
//$fruit->message();
// $first_mango = new Mango();
//$first_mango->message();

// Version 2

$banana = new Fruit('banana');
// $banana->message();

$mango = new Fruit('mango');
$mango->message();

//Notes

//1. More code introduces bugs. The aim is REUSABLE code.
//2. A parameter is sent. An argument is received. 
//3. Individual instances can behave differently after inheriting common traits.
//4. Variables and special characters can be parsed when using double quotes and therefore evaluated, otherwise they are string literals.

//Glossary
//Inheritance
//Extending behaviour and functionality, including the persistence of data 
// TODO - show bugs around persisting data in objects
//Class as a reusable template for object creation
//Individualisation of objects by understanding what separate instances can do



