<!DOCTYPE html>
<html>
<body>

<h1>Learn PHP</h1>

<?php

//Call functions
myVariables();
myPHPObject();
myPHPStrings();
myPHPNumbers();
myPHPContants();
myPHPOperators();
myFunction();
myPHPLoops();
myConditions();

//Variables
function myVariables() {
    $name = "Kelvin Kiprop";
    $phone_number_end = 4000;
    echo "Hello ".$name."! your phone number end with ".$phone_number_end;
    
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);//var_dump() function returns the data type
    echo "<br>";
    echo "<br>";
}

//PHP Objects
function myPHPObject()
{
    # Car Class
    class Car {
        function Car() {
            $this->model = "VW";
            $this->number_plate = "KBC 125T";
        }
    }
    // create an object
    $herbie = new Car();
    // show object properties
    echo $herbie->model;
    echo $herbie->number_plate;
    echo "<br>";
    echo "<br>";
}


//PHP Objects
function myPHPStrings()
{
    $greetings = "Hello world!";
    echo strlen($greetings); // outputs 12 //strlen() - Return the Length of a String
    echo str_word_count($greetings); // outputs 2//str_word_count() - Count Words in a String
    echo strrev($greetings); // outputs !dlrow olleH//strrev() - Reverse a String
    echo strpos($greetings, "world"); // outputs 6//strpos() - Search For a Text Within a String
    echo str_replace("world", "Dolly", $greetings); // outputs Hello Dolly!//str_replace() - Replace Text Within a String

    echo "<br>";
    echo "<br>";
}


//PHP Objects
function myPHPNumbers()
{
    //Check if the type of a variable is integer:
    $x = 10.365;
    var_dump(is_float($x));
    //Check if a numeric value is finite or infinite:
    $x = 1.9e411;
    var_dump($x);
    //PHP NaNInvalid calculation will return a NaN value:
    $x = acos(8);
    var_dump($x);
    //Check if the variable is numeric:
    $x = 5985;
    var_dump(is_numeric($x));
    $x = "5985";
    var_dump(is_numeric($x));
    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    $x = "Hello";
    var_dump(is_numeric($x));
    //PHP Casting Strings and Floats to Integers
    // Cast float to int
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";
    echo "<br>";

    // Cast string to int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";
    echo "<br>";

}


//PHP Contants
function myPHPContants()
{
   // case-insensitive constant name
    define("GREETING", "Welcome to W3Schools.com!", true);
    echo greeting;
    echo "<br>";
    echo "<br>";
}


//PHP Operators
function myPHPOperators()
{
   // Modulus
   $x = 15;
   $x %= 4;
   
   echo $x;
   echo "<br>";
   echo "<br>";

}


function myFunction()
{
    # code...
    function writeMsg() {
        echo "Hello world!";
    }
    writeMsg(); // call the function
    echo "<br>";
    echo "<br>";
}

function myPHPLoops()
{
    # While loop
    $x = 1;
    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    } 
    //Do while loop
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
    //Foreach loop
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
    echo "$value <br>";
    }
    echo "<br>";
    echo "<br>";
}


function myConditions()
{
    # If statement
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
    }

    # If Else statement
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }

    #switch
    $favcolor = "red";    
    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }

    function mySuperglobals(){
        //$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods). 
        $x = 75;
        $y = 25;
        
        function addition() {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        
        addition();
        echo $z; 
        //$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. 
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
                
    }

}



?> 



</body>
</html> 