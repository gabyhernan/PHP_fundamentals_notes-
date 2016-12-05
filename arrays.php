<?php
// ARRAYS
// become very useful when working with database records
// keys(num of position) and values (int, str, bool, arrays)
// --------------------------------------------------------------------------------
# What is an array ?
// Think of an array as a collection of types
//Can contain any type integers, strings, floating, even other arrays
// each of these values can be accessed via a related key. Key value pair
// There are two ways to create arrays
//    1. by using Array ()
$authors =array("Charles Dickens", "Jane Austin", "Gaby Hernandez", "Lilo Lebron");
print_r($authors);

// 2. squre bracket syntax
$dogs = ["Golden Retrievers", "Huskies", "Boston Terrier"];
print_r($dogs);

$allTypes = [10, 23.3, "Howdy", false];
print_r($allTypes);
// --------------------------------------------------------------------------------
# ASSOCIATIVE ARRAYS
# Any time you alter the key in the array you have to turned
// the indexed array into an assocative array

$random = array(
        "Lilo" => "Weiner Dog", // Lilo is the key
        11 => "Stranger Things", // putting an integer does not make this an indexed array
        "Nala" => "Boston Terrier", // Each key refers to a specific value
        "Alberto" => "Robot",
        "Gaby" => "Unicorn",
        "Mark Twain" //  if it doesn't have a key, it will assign key of next number in array
  );
        print_r($random);
// We can take any integer insert into ane location
// and anything that has no key assigned to it will be automatically be increased
// for the next key
// --------------------------------------------------------------------------------
# Accessing the values inside of an array is pretty simple
        echo $authors[2];  // if its an indexed array
        echo $random["Alberto"]; // call the key value if its an associative array

  // The problem that we run into is if that does that particular array exists
   // Function call array_key_exists can check that
        // 2 required param ( key your trying to acess, array var)
      echo array_key_exists("Gaby", $random); // 1 is true , nothing printed is false
      echo array_key_exists(4, $authors); // prints nothing cuz false
// --------------------------------------------------------------------------------
// check if a value exists inside of an array  (in_array);
      // takes 2 required params and an optional 3
      // 1st param is value that your looking for
      // 2nd param is array variable
      // 3rd optional param check if the types are the same
      // default to false so if we want to check if all values are the same put true

      $humans =array(
        "Charles Dickens",
       "Jane Austin",
       "Gaby Hernandez",
        "Lilo Lebron",
        200
        );

  echo in_array("Lilo Lebron", $humans);
    echo in_array(200, $humans, true); // we want to check that type is the same
    // this prints 1 so its true
     echo in_array("200", $humans, true);
     // the types are different here so it prints nothing so false
// --------------------------------------------------------------------------------
//ADDING VALUES TO ARRAY (Array_push)
     // Array_push function - 2 required params (var, value you want to add)
  # returns an integer with the count of how many items are in the array

        $people =array(
        "Charles Dickens",
       "Jane Austin",
       "Gaby Hernandez"
       );
        array_push($people, "Teri Hernandez");
          // if the array has not been declared it will throw an error

      # other way to do it is. This is the preferred method to adding elements to an array
        // with square brackets if the array is not created, it will create it

        $people[] = "Alma Lebron";
# array push adds only indexed values
     # if you do a array_push to an associative array it will be the next available
        // integer which in most cases will be 0
        print_r($people);

      // if you want to add a value a key value pair you just need to alter the square bracket syntax
        $people["person"] = "Lexi Alvarado";
// --------------------------------------------------------------------------------
# REMOVING LAST VALUE FROM ARRAY (Array_pop) takes 1 required param
      // built in array pop function -
//  removes the very last element in the array
  // now when it removes the item from the array you can save it into a var

        $lastValue = array_pop($people); // removes last element
        echo $lastValue;
        print_r($people);
// --------------------------------------------------------------------------------
# REMOVING SPECIFIC VALUES FROM ARRAY (unset)
    // The unset function allows you to remove a specific item from an array.
        // 1 required param ( var you want to remove)

  // Unset has the ability to remove several variables at the same time , you
  //  just separate everything with a coma

        unset($people[1], $people[0]);

        //works the same way with associate arrays
        unset($random['Lilo']); // removes Lilo from $random array

        print_r($people);
// --------------------------------------------------------------------------------
// SORTING ARRAYS - there are many ways to sort an array
        $food = array(
          "hot dogs",
          "pizza",
          "salad",
          "mashed potato",
          "mac and cheese"
          );

        $foodAssociative = array(
            "baseball game" => "peanuts ",
            "healthy" => "juice",
            "italian" => "pasta",
            "cuban" => "ropa vieja",
            "junk food" => "cheeseburgers"
          )
    // takes 1 required param, optional parameter
        sort($food);
        print_r($good); // it sorts all the values in alphabetical order

        # NOTE sort($foodAssociative); // when u sort an associative array
        // all the key values will be gone and become indexed values

       #  ASORT // takes 2 paramets ( 1 required param , optional param sort flag)

        //  preserves the keys of the values of the array ,
        // Asort preserves all the key values perfect for dealing with associative arrays
        asort($foodAssociative);  // idea for assoicate array
        print_r($foodAssociative);

        asort($food);
        print_r($food); // notice that the key values won't be in order cause values are preserved

        # KSORT - will sort the array by its key value and will maintain
       //  that key to data corralation. Case sort is for associative array

        #  1 req param ,1 optional ( sort flags)
        ksort($foodAssociative);
        print_r($foodAssociative);
// --------------------------------------------------------------------------------
  # COUNT() - takes 2 params
        // 1st is param ( $array var )
        // 2nd is optional deals with multidimensional arrays

        echo count($foodAssociative);

        // counting Multidimensional Arrays - using constant set up by PHP count recursive
    $authorsMult = [
        "Male" => array(
            "Charles Dicken" => array("A Christmas Carol", "Oliver Twist"),
            "Williams Shakespeare" => array("Romeo & Juliet", "Richard III")
            ),
        "Female" = array(
          "L.M. Montogmerry" => array("Anne of Green Gables", "Anne of Turkey Land"),
          "Gaby Hernandez" => array("Dogs", "Llamas", "Kangaroos")
          )
    ];
    print_r($authorsMult);

    //to access values of multidimensional arrays
    print_r($authorsMult['Male']);
    // you can take it further
    print_r($authorsMult['Male']['Charles Dicken']);
    // even further
    print_r($authorsMult['Male'],['Charles Dicken'],[0]);

    echo count($authorsMult, 1); // 2nd param is usiing PHP constant count recursive
    echo count($authorsMult, COUNT_RECURSIVE); // doesn't matter which one you use

    // --------------------------------------------------------------------------------
# FOR EACH LOOP ( )- designed specifically for arrays
  // loops through each individual item in array
        $dog = array("woof", "woof", "roar", "woofwooofoo");

        foreach ($dog as $value){
          echo "$value.\n";
        }

       $foodAssociative = array(
                  "baseball game" => "peanuts ",
                  "healthy" => "juice",
                  "italian" => "pasta",
                  "cuban" => "ropa vieja",
                  "junk food" => "cheeseburgers"
                )
          // getting keys from associative array in for each loop
         foreach($foodAssociative as $key => $value){
          echo "$value.\n$key.\n";
        }


