<?php
// What is a class?
 // code reuse, maintanalibity, encapsulation
 // (putting like data into single component)

class Person {
// declare an instance of a class that variable type is called object
  // all properties variables start out with
 // the word private, public, or protected

  // the idea of a public class is that it can be
  // accessed  outside of this class through our object variable
  public $firstName = "Gaby" ;
  public $lastName;
  public $yearBorn;

// properties can have default values but the default values
    // cannot be acted upon
// for ex we cant have functions there or math equations
}

$myObject = new Person(); // declares an instance of a class
// object operator is ->  then propery name we want to access
echo $myObject -> firstName."\n"; #no $ sign needed;

$myObject -> firstName = "Nala"; // changing the defaultvalue of property

# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// CREATING CONSTANTS
// In PHP we can have constants that are just accesible inside of a class
class Person {
// unlike properties you can do math in const values
  // there are limitations , you cannot used defined properties
  const AVG_LIFE_SPAN = 75;

  // for ex we couldnt use our yearBorn property in the equation

  public $firstName = "Gaby" ;
  public $lastName;
  public $yearBorn;

}

# ways to access Constant ( we use :: scope resolution operatpr )
$myObject = new Person();

echo $myObject::AVG_LIFE_SPAN;

# second way is access Constant
echo Person::AVG_LIFE_SPAN;
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// CREATING METHODS - methods are just functions that live inside of our class
  // When we create a function inside of a class we call it a method
 class Person {

  const AVG_LIFE_SPAN = 75;

  public $firstName = "Gaby" ;
  public $lastName;
  public $yearBorn;


// all functions like propertiese can have a visibility of
  //public, protected or private

  // public can be accesed outside of our class by an obj variable
  // in order to access values we use pseudo word $this
  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($tempName){
    // we access a method(function) like we access the properties
    $this->firstName = $tempName;

  }

}

$myObject = new Person(); // we are goign to take the object variable
 // we have already declared an instaniance here

$myObject->setFirstName("Sam");

echo $myObject->firstName; // prints Sam
echo $myObject->getFirstName(); // still prints sam but this is how "this" works

# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    # CONSTRUCTORS IN CLASSES
// Sometimes when we create a new instance of a class  we want some code to be
// executed immediately. We dont want to call an extra function after we have instantianed
// the class

// Inside of a class we can set a constructor - this constructer is a method
// that runs right when the class is instantianed

 class Person {

  const AVG_LIFE_SPAN = 75;

  public $firstName;
  public $lastName;
  public $yearBorn;

  function __constrcut(){
    $this->firstName = "Gaby"; // now we have all 3 propeties being set
    $this->lastName = "Hernandez"; // inside of the constructor
    $this->yearBorn = 1992;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($tempName){
    // we access a method(function) like we access the properties
    $this->firstName = $tempName;
  }
}

  $myObject = new Person(); // now when you call this
  // whatever is inside the constructor will be run. Since it runs right
  // when the class instantianed
  echo $myObject->getFirstName();

# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  // PASSING INITIAL VALUES USING OUR CLASS DECLARATION
  // We can pass in parameters into our constructor

  // we need to alter our constructor and class object
 class Person {

  const AVG_LIFE_SPAN = 75;

  public $firstName;
  public $lastName;
  public $yearBorn;

// we are setting our param values with a default value of an  empty string
// this way we can call our class & if we dont want to set the value right
// at that moment, we don't have to

  function __constrcut($tempFirst = "" , $tempLast = "", $tempYear = ""){
    $this->firstName = $tempFirst; // now we have all 3 propeties being set
    $this->lastName = $tempLast; // inside of the constructor
    $this->yearBorn = $tempBorn;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($tempName){
    // we access a method(function) like we access the properties
    $this->firstName = $tempName;
  }
} // class ends

$myObject = new Person("Gabriella Marie", "Hernandez Lebron", 1992);
echo $myObject ->getFirstName();
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//INHERITANCE - allows one class to inherit the methods and properties of the other

// think of a child & a parent
// - the child inherits some of the features of the parent
 class Person {

  const AVG_LIFE_SPAN = 75;

  protected $firstName;
  protected $lastName;
  protected $yearBorn;


  function __constrcut($tempFirst = "" , $tempLast = "", $tempYear = ""){
    echo "Person Constructor".PHP_EOL;
    $this->firstName = $tempFirst; // now we have all 3 propeties being set
    $this->lastName = $tempLast; // inside of the constructor
    $this->yearBorn = $tempBorn;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($tempName){
    // we access a method(function) like we access the properties
    $this->firstName = $tempName;
  }

  protected function getFullName(){
    echo "Person->getFullName()".PHP_EOL; // takes the place of our "\n"
    return $this->firstName."".$this->lastName.PHP_EOL;// EOL stands for end of line
// these two prints statements will help us visualize inheritance
  }
} // class ends

// in order for inheritance to work we need another class wwere it can inherit
// from the Person class
class Author extends Person
{// in order for my class author to inherit class Person we use keyword extends
  public $penName = "Mark Twain"; // 1 property
  public function getPenName(){ // 1 method called getPenName
    return $this->penName.PHP_EOL;
  }

    public function getFullName(){
    echo "Author->getFullName()".PHP_EOL; // takes the place of our "\n"
    return $this->firstName."".$this->lastName.PHP_EOL;
// these two prints statements will help us visualize inheritance
  }
}

$newAuthor = new Author(); // when you run this Person Constructor will run
// 1. Whatever is inside the __construct function will fun
// Author class inherits person

$newAuthor2 = new Author("Gaby Marie", "Hernandez", 1992);
// these values are being set in the Person constructor
echo $newAuthor2->getFullName();
// will print out Person Constructor
// then Person->GetFullName() since you called that function
// then the value that you declared

// what happens when the Author class has a method with the same name as
//a method in the Person class?

// ANSWER: it will run the function from the Author because thats the one u created
// but it can take in properties inherited from the other class

// If the child class has a method that is named exactly like a method in the
// parent class the child's class method will OVERRIDE the parent's method
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// PROTECTED CLASSES
// These two keywords can be used on methods and properties

// Protected - means that the properties or the method can only be accessed within
// the classes itself. When you inherit a class can also access those properties
// and methods that are protected
class Author extends Person
{// in order for my class author to inherit class Person we use keyword extends
  protected $penName = "Mark Twain"; // changed this to protected
  public function getPenName(){ //
    return $this->penName.PHP_EOL;
  }
// in order to change it to protected we have to go to our class Person
  // and change our properties to the keyword protected
    public function geCompleteName(){
    return $this->firstName." ".$this->lastName." a.k.a ".$this->penName.PHP_EOL;

  }
}
$newAuthor2 = new Author("Gaby Marie", "Hernandez", 1992);
echo $newAuthor2->penName; // if you run that you will get a fatal error
// because its a protected property

echo $newAuthor2->getFullName(); // gives another error because getFullName is protected

// in order to access a protected method or property
// another method that is public needs to call it
echo $newAuthor2->getCompleteName(); // this will work
// you can only access those properties  within the class itself
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// PRIVATE CLASSES
//  change all of the properties in this class to keyword private
 class Person {

  const AVG_LIFE_SPAN = 75;

  private $firstName;
  private $lastName;
  private $yearBorn;


  function __constrcut($tempFirst = "" , $tempLast = "", $tempYear = ""){
    echo "Person Constructor".PHP_EOL;
    $this->firstName = $tempFirst; // now we have all 3 propeties being set
    $this->lastName = $tempLast; // inside of the constructor
    $this->yearBorn = $tempBorn;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($tempName){
    // we access a method(function) like we access the properties
    $this->firstName = $tempName;
  }

  protected function getFullName(){
    echo "Person->getFullName()".PHP_EOL; // takes the place of our "\n"
    return $this->firstName."".$this->lastName.PHP_EOL;// EOL stands for end of line
// these two prints statements will help us visualize inheritance
  }
} // class ends

class Author extends Person
{// in order for my class author to inherit class Person we use keyword extends
  private $penName = "Mark Twain";
  public function getPenName(){ //
    return $this->penName.PHP_EOL;
  }

    public function geCompleteName(){
    return $this->firstName." ".$this->lastName." a.k.a ".$this->penName.PHP_EOL;

  }
}

$newAuthor3 = new Author("Alma Lebron", "WEEEEE", 1959);

// lets access the pen name from the Author class object
echo $newAuthor3->penName; // will give fatal error
// all private properties can only be accessed inside of the class they
// are declared or set

echo $newAuthor3->getCompleteName(); // you will get a notice
// that the properties are undefined
// those private properties are first name and last name from your PErson Class

// We can fix this by doing this

 class Author extends Person
{// in order for my class author to inherit class Person we use keyword extends
  private $penName = "Mark Twain";
  public function getPenName(){ //
    return $this->penName.PHP_EOL;
  }

    public function geCompleteName(){
    return $this->getFullName()." ".$this->lastName." a.k.a ".$this->penName.PHP_EOL;
  // change this to getFullName that is a PRIVATE class from Person class
  }

  // in output window you will receive full method
}

# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Static properties & methods
// a static property has to have a value set
// & a static method has to be self contained that means it cant rely on
//any other classes properties or methods to accomplish its coding task

//it can however rely on other static properties and methods


and
class Person {

  const AVG_LIFE_SPAN = 75;

  private $firstName;
  private $lastName;
  private $yearBorn;


  function __constrcut($tempFirst = "" , $tempLast = "", $tempYear = ""){
    echo "Person Constructor".PHP_EOL;
    $this->firstName = $tempFirst; // now we have all 3 propeties being set
    $this->lastName = $tempLast; // inside of the constructor
    $this->yearBorn = $tempBorn;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setFirstName($tempName){
    // we access a method(function) like we access the properties
    $this->firstName = $tempName;
  }

  protected function getFullName(){
    echo "Person->getFullName()".PHP_EOL; // takes the place of our "\n"
    return $this->firstName."".$this->lastName.PHP_EOL;// EOL stands for end of line
// these two prints statements will help us visualize inheritance
  }
} // class ends

 class Author extends Person
{// to make the property static just add keyword static afterwards
  public static $centuryPopular = "19th"; // needs a value since it is a static property
  private $penName = "Mark Twain";
  public function getPenName(){ //
    return $this->penName.PHP_EOL;
  }

    public function geCompleteName(){
    return $this->getFullName()." ".$this->lastName." a.k.a ".$this->penName.PHP_EOL;
  }

  public static function getCenturyAuthorWasPopular(){
    // must be self contained cant rely on anything except other static
    // properties
    return self::$centuryPopular;
    // NOTE : when dealing with the a static method or property from a
    //parent class
// instead of using the world self you would use the word parent
  }
}// closes Author class

echo Author::$centuryPopular;
echo Author::getCenturyAuthorWasPopular();
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// INCLUDING FILES INSIDE OF A PHP scipt

// common naming conventions indicate that you would name the file
// with the same name of the Class

// to include script you write keyword "include" and the name of the file ex "Person.php"


// sometimes we dont know if a file has been included once or multiple times
// to check that we can write "include_once" instead
// when you include the same file twice PHP will throw an error
# ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// DIFFERENCE BETWEEN INCLUDE AND REQUIRE
// require, require_once
// if you use the keyword require and it cant find the file it will terminate the script
// at the point it cant find the necessary file

// if i were to include a file that PHP cant find using include PHP would
// throw an error but then it would continue executing the rest of the clip





