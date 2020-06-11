# Keywords and Terminology i.e. Glossary

## Argument
1. values and variables **sent** inside a function or method call 

## Parameter
1. the **received** value or variable into a function or method call
2. the parameter is **locally scoped**
- This means you can _rename_ it and it does not have to match the _argument_ name

## Initialisation

## Default value

## Deprecated

No longer in use, though it will still work in older versions that contained it.

# PHP Syntax

1. Opening and closing tags
```
<?php 

?>
```

2. All variables begin with `$` e.g. `$var`

3. You can assign default values by not only initialising variables through assignment, but also through parameters.
```
  function __construct($given_name = "Paul") {
    $this->name = $given_name;
  }
```
Always be aware of the default value in the language you're working with. In PHP, it's NULL:
```
echo ($x == NULL);
```

4. String syntax
- Single or double
- Single is for literals only
- Double can evaluate variables and escaped chars e.g. "\n" "\t"
- You can escape (and negate the effect of a backslash, with another backslash `\\n`)

## OOP

1. OOP Notation is arrow notation `->` not `.` e.g. `$obj->func()` and NOT `$obj.func`

2. Understand when you are making different instances of an object and when you wish to use the same instance.

> Each instance works differently because of the contextual variable called 'this':
```
$this->name; //works for the object it is running within
```

3. Remember the scope of class fields and methods. Set them as appropriate.
- fields are often `protected` so that they cannot be accessed directly. If that were possible, it opens up risks to bad practice and all sorts of errors.

4. Do not make fields public, use getters and setters.
- getters are used to access fields (i.e. read)
- setters are used to assign values to fields (i.e. modify/update)
- getters and setters are `public` scope so that they can be used on all instances

**5. Every class should have a constructor unless it is static**

### Static 

**1. What do you lose? What do you gain? How does it work...syntax and use cases**

### todo

1. Error catching 

# Important history

1. PHP is based on C, like JS also is.

# Important facts about how you approach developing with it 

1. Interpreted Language
- You must exit gracefully!

> Avoid things like fatal error
```
PHP Fatal error:  Uncaught ArgumentCountError: Too few arguments to function Person::__construct(), 0 passed in /home/runner/OOP/howto.php on line 32 and exactly 1 expected in /home/runner/OOP/howto.php:23
Stack trace:
#0 /home/runner/OOP/howto.php(32): Person->__construct()
#1 {main}
  thrown in /home/runner/OOP/howto.php on line 23
```

2. Version number, use 7.2 and above, most OS Libraries use this version and beyond.
```
php -v
```

# System and Environment setup

1. Windows PATH
2. PHP version number
3. Code dependencies

# Workflows

## Server
When you need HTML CSS JS i.e. a web stack

## Terminal
When you just want to work in PHP


# Further study

1. Run a session on C, structs and memory handling
2. makefile