<?php
# STRINGS
// When you use single quotes the string IS NOT evaluated
# creating string variables using single quotes
$currency = 'penny';
$sampleString = 'A $currency saved is a $currency earned';
// single quotes will not detect that you are calling a variable
echo $sampleString;
// this is the biggest difference between single and double quote
// --------------------------------------------------------------------------------
// When you use double quotes the string IS EVALUATED
$doubleQuote = "A $currency saved is a $currency earned";
echo $doubleQuote;
// --------------------------------------------------------------------------------
// in single quotes \n doesn't work
$holiday = 'St. Patrick\'s Day \n';
echo $holiday; // prints out \n instead of creating new line

// --------------------------------------------------------------------------------
$var = 2;
echo "{$var}nd place"; // if u dont put curly braces it will throw error

// OR you can use concatenation!!!!
echo $var."nd place";
// --------------------------------------------------------------------------------
?>

<?php
// HERE DOCUMENT - most imp thing to remember in here doc is syntax
echo <<<EOT
CAT CAT
        CAT
      CAT CAT CAT
      BOO
      - Gaby
EOT; // you cannot tab or put any space when ending an here doc
// it will throw you an error
// --------------------------------------------------------------------------------
# PRINT(); - when to use print

// print and echo can be used interchangeably
// echo is slightly faster

// echo can print more than one parameter

echo "Doesn't matter what you use , as long as you are consinstent in your code";
// --------------------------------------------------------------------------------
## BUILT IN PHP FUNCTIONS FOR STRING MANIPULATION

$quote = "You are a dog larger than a real dog but not a larger dog really";

$quote = strtoupper($quote);
echo $quote;  // will upuper case everything
// --------------------------------------------------------------------------------
$quote = strtolower($quote);
echo $quote;  // will lower case everything
// --------------------------------------------------------------------------------
$lenghString = strlen($quote);
echo $lenghString;
// --------------------------------------------------------------------------------
// STRING POSITION (strpos) - will tell u position of character in a string
// takes 2 required parameters & 1 optional ($var, "word to find")
// 3rd parameter (# of positing you want to start the search in )

// STRPOS is case sensitive
echo strpos($quote, "dog");
echo strpos($quote , "dog", "11"); // will print next position number of where dog start
// --------------------------------------------------------------------------------
// STRING REPLACE (str_replace)- will replace 1 value with another value inside of a string
// requires 3 params
// 1st is value you were looking to replace
// 2nd is replacement value
// 3rd param is the string itself
// 4th param is optional but is the count so u can call it forex.$count
$replaced = str_replace("larger", "smaller", $quote);
// with optional param
$replaced = str_replace("larger", "smaller", $quote, $count);
echo $replaced;
echo $count; // prints out num of times you changed a value in string
// --------------------------------------------------------------------------------
# SUBSTRING - will take a string and create a substring from the specific
//location that you provide
// has 2 required params , 1 optional
// 1st is the string value
// 2nd param start position where you want this to begin
// 3rd param specify when you want it to end
echo substr($quote, 7); // starts printing out from position 7
echo substr($quote, -6); // negative number will start backwards
//  the last part of your string will be pring
echo substr($quote, 5, 15);
echo substr($quote, 2, -5); // using negative num it will take out whatever num you specify
// --------------------------------------------------------------------------------
# STRING SPLIT(str_split) - takes a string and coverts it into an array
// takes 1 required param and 1 optional param
// 2nd param - any integer value that we provide will split
//  our string up by that string size

$varArray = str_split($quote); // splits up string into individual characters
print_r($varArray);
$varArray = str_split($quote, 10);
print_r($varArray);

