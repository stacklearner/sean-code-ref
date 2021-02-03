<?php 

/**
 * Class is the main building block in Object Oriented Programming.
 * Basically class is a template or blueprint of an object.
 * We can create unlimited object based on the class.
 * 
 * To define a class we have to start with 'class' keyword. Then we have to name our class.
 * We can choose any name but class name always starts with Capital Letter.
 */
class Person {
    /**
     * In a class we can have two different attributes.
     * 1. properties or variables
     * 2. methods
     */

     /**
      * defining a property is easy. We can define a property as like as we define variables.
      * But when we want to define a property inside a class - 
      * We have to provide an access modifier. For now we can skip the term access modifier
      * and write directly 'public' infront of the property;
      */

    public $id = 1;

    /**
     * We can have as many properties as we want
     */

    public $name = 'HM Nayem';
    public $email = 'hmnayem@stacklearner.com';
    public $languages = array('Java', 'C', 'Javascript', 'Python', 'PHP');


    /**
     * We can have as many methods as we want inside of a class.
     * Methods are just functions. When we define a function inside a class body,
     * We call that function 'Method'. 
     * Because you can't call a method without help of object or class. 
     */

    /**
     * Here we are just logging the properties
     * $this always refer to the class or object, in that case it will refer Person class.
     * $this->name refers name property of the Person object
     * implode(',', array) returns a string of array elements after joining them together
     */
    public function log() {
        echo "Name: $this->name, Email: $this->email, Skills: " . implode(',', $this->languages) . "\n";
    }
}

/**
 * If you run this code it will show nothing.
 * Because as like as function, class won't call automatically
 * You have to manually call the class with a special 'new' keyword to create an object
 * When you create an object, in our case you also can't show any difference
 * When `$person = new Person();` this line of code executes it will create an object and
 * call a constructor method behind the scene. But it won't call other functions that 
 * we defined inside the class.
 */

/**
 * Now you have a person object that contains id, name, email of a person.
 * This object also hold the method we have defined.
 */
$person = new Person();

/**
 * We can access the object and retrieve properties using `->` operator
 */
echo $person->name . "\n";
echo $person->email . "\n";

/**
 * We can invoke methods as same before
 */
$person->log();

/**
 * Now, if you run this code it will show some output in your console.
 */