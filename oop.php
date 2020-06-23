<?php

class Fruit {

  protected $name = '';
  protected $has_seed = null;
  
  function __construct ($name, $seed = false) {
    $this->name = $name;
    $this->has_seed = $seed;
  }
  
  public function message() {
    //variables and special characters can be parsed when using double quotes
    echo "\n\tI am a piece of fruit named $this->name\n\n";
  }

  public function hasSeed() {
    return $this->has_seed;
  }

  public function getName() {
    return $this->name;
  }

  public function messageAboutSeeds() {

    $msg = $this->name;
    // echo 'Msg starts as '.$msg;

    // echo 'Does it have a seed?'. $this->has_seed;

    if ($this->has_seed) {
      $msg .= ' has seeds';
    }
    else {
      $msg .= ' does not have seeds';
    }
    // ($this->has_seed) ? $msg.' has seeds' : $msg.' does not have seeds';

    // ($this->has_seed) ? $msg = ' has seeds' : $msg = ' does not have seeds';

    return $msg;
  }

  //todo: capitalise name
}

/*
 *  This class is a specific fruit therefore INHERITS general fruit behaviour
 */
// class Mango extends Fruit {
//   protected $name = 'Mango';
//   protected $has_seed = true; 
// }

// class Banana extends Fruit {
//   protected $name = 'Banana';
//   protected $has_seed = false;
// }

$fruit = new Fruit('Banana');
echo "\n\t" . $fruit->messageAboutSeeds() . "\n";

$fruit = new Fruit('Mango', true);
echo "\n\t" . $fruit->messageAboutSeeds() . "\n";


//Notes
//1. You can have default values, in which case they become option parameters and can be omitted. 
//2. We do not want repeating code, we want REUSABLE code.
//3. Be careful that you are ASSIGNING VARIABLES when you intend to, and also NOT OVERWRITING unintentionally.


//TODO: How else to hold shared information in a class e.g. which fruits have seeds
