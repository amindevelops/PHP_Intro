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
class Mango extends Fruit {
  protected $name = 'Mango';
  protected $has_seed = true; 
}

class Banana extends Fruit {
  protected $name = 'Banana';
  protected $has_seed = false;

  public function messageAboutSeeds() {
    echo "This has been taken over by a virus";
  }
}

// $fruit = new Fruit('Banana');
// echo "\n\t" . $fruit->messageAboutSeeds() . "\n";

// $fruit = new Fruit('Mango', true);
// echo "\n\t" . $fruit->messageAboutSeeds() . "\n";

$banana = new Banana('American');

// echo $banana->messageAboutSeeds();

$m = new Mango('African');

echo $m->messageAboutSeeds();


//Developer Exploration
//1. Pausing and thinking is great, when you have a chance to ask someone.
//2. However, if you are forced to research, then sometimes trying things is quicker than researching.
//3. Seek to answer questions by attempting, rather than delaying on account of 'research' because sometimes the desire to research is a manifestation of a personal trait:
//a. fear
//b. inconfidence
//c. etc ...
//4. Embrace your own implementations as a way to discover your natural thinking and internal creativity
//5. Stand up for what you think - your opinion. Certain level of understanding.
//6. Retrospect using additonal guidance. Always take away with you: WHY IT WAS NOT RIGHT FOR WHATEVER REASON. It is not always about right or wrong. It could be opinion.
//7. Your own opinions form a better framework for personal and professional growth, than considering yourself to be a novice, clueless etc.
//8. 

//Attempts
//1. More or less confident? Confidence does not only come from things working. It comes from experience. WHAT YOU TAKE AWAY IS YOUR EXPERIENCE.
// - WHAT YOU FORGET, is often your failure.
//2. Ruling out failures = progress.
//3. 

//How to inspect code logic
//1. Work backwards
//2. Identify relationships and makes notes of what to come back
//3. Reach confirmations as soon as possible

// CONSISTENCY
// coding style
// company style guidelines
// developer best practice
// industry conventions (over configuration)
// (subject matter) design patterns
// implementations can differ, but the acceptance test (based on original requirement) is the same.
// Maintain your professionalism sometimes entails maintaining your learning
// Maintain your professional network. 
// 

// CHALLENGES
//1. Interpretation: "draw that door" vs still hearing "draw a door"
// - Attention to detail
//2. 


//Notes
//1. You can have default values, in which case they become option parameters and can be omitted. 
//2. We do not want repeating code, we want REUSABLE code.
//3. Be careful that you are ASSIGNING VARIABLES when you intend to, and also NOT OVERWRITING unintentionally.
//4. INHERITANCE results in Child classes EXTENDING Parent classes.
//5. Classes are 'declared' and inheritance is used to share behaviour without repeating code.


//TODO: How else to hold shared information in a class e.g. which fruits have seeds


all via eLMS
send out assignment by fri or monday
1. test all content from first 3 sessions
2. harder assignment based on results from first assignment
3. final session on advanced OOP
4. assignment to prove how much has been learned

symfony
twig

back to grav

structure grav topics that have been covered to see what's missing
then add custom php functions on top to have full developer control...

grav for designers (media and image ops) and web developers (code)
grav for cms developers

