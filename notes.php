<?php
// Constant are global variables which can be accessed everywhere inside
//functions, inside classes, wherever you need to access them

define("HELLO", "Welcome to W3Schools.com!");
echo HELLO;

define("GABY", "I am Gaby and I am an unciron");
echo GABY;

// All constants are upper case and any of the words are separated with an underscore,
//  then value of that constant

# The example below uses a constant inside a function, even if it is defined outside the function
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}
myTest();
// --------------------------------------------------------------------------------
# CHECKING VARIABLE TYPES
define("CHECK_CONSTANT", "Yes I am a constant bitch");

$intVar = 1234;
$stringVar = "I am a string";
$boolVar = false;
$floatVar = 12.43;

// makes for a very easy if statement
echo is_int($intVar); // if nothing prints out it's false
                      // 1 is equal to true
echo is_string($stringVar); // output will be 1 which means true
// there is an is_bool, and is_float

// check if constant has been defined
echo defined("CHECK_CONSTANT"); // 1 is true nothing false
// --------------------------------------------------------------------------------
// FUNCTIONS  - reusable block of code performs a specific tasks
// \n  next to string will print on its own individual line
function bookByAuthorYear($authorName, $year){
  echo $year;
  echo "\n";
  echo $authorName;
  echo "\n";

}
$year = 1738;
$authorName = "Vitin El Cangri";

// Giving parameters default values in functions
// all required parameters need to be declared at the beginning
// all default parameters need to be declared at the end of parameter declaration

function booksByAuthorYear($tempAuthorName, $tempYear = 1992 ){
  echo $tempYear;
  echo "\n";
  echo $tempAuthorName;
  echo "\n";
}

// if you call your function now year 1738 will still appear
booksByAuthorYear($authorName, $year);
// but if you call the function with one parameters instead of the two
// usually it will throw you an error
// except if you set a default value in your parameter
booksByAuthorYear($authorName);
// --------------------------------------------------------------------------------
// RETURNING VALUES WITH FUNCTIONS
// You can call a function by using a variable name
function getAuthor (){
  return "Bitch Sister";
}

$author = getAuthor();

function getDog () {
  echo "WOOF";
}

$variableFunctionName = "getDog";
// you can call the variable name by
$variableFunctionName();
// --------------------------------------------------------------------------------
# VARIABLE SCOPE
$sillyName = "Lola La Caballota";
# Functions have it's own variable scope ( local scope)
# variables declared inside that function are only available in that function
function setAuthorName() {
  $sillyName = "Vitin El Mas Mejor";
}
echo $sillyName; // will print "Lola La Caballota "
// since the var declared inside that function is a local var

# think of a function like a box
# unless you return the values inside the box you won't have access to them outside
// --------------------------------------------------------------------------------
# GLOBAL SCOPE
function setAuthorName() {
  // note that global only works inside of a function
   // variables are already global outside so it wont work
  global $sillyName; // this line of code will make the sillyName global
  $sillyName = "Vitin El Mas Mejor";
}
