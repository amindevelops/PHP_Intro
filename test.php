<?php

class Writer {

  public static function toFile($data) {
    
    $file = fopen('log.md', 'a+');//What does a+ do again?
    //What happens if file does not exist?

    //$data = "hello"
    fwrite($file, $data);

    fclose($file);
  }
}

//If you instance an object
$my_writer = new Writer();

//Use OOP notation
// $my_writer->toFile("hello");

//But for static functions
//You call them via the class name
Writer::toFile("some value\n");

