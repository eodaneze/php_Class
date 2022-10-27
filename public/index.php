<?php 
   echo "I am learning php" . '<br>';

//    variables in php


$name = "Daniel";
echo $name;


$price1 = 30;
$price2 = 30;
$total = $price1 + $price2;

echo($total);


// data types
/*  
 string
 integer
 booloan
 array
 object
 undefined
 null

*/



$names = "Jogn Deo";
$age = 33;
$address = "London";

// echo($names + $age + $address);

$details = "  Learning how to code is worthwhile";

echo "<pre>";
echo "<h1 style='color: red'>$details</h1>";
echo "</pre>";
// strlen



$length = strlen($details);
echo '<pre>';
echo $length;
echo '</pre>';

// trim method

$trimFunction = trim($details);

echo '<pre>';
echo strlen($trimFunction);
echo '</pre>';


// string word count

echo '<pre>';
echo str_word_count($details);
echo '</pre>';


// replacing a string

$replaceString = str_replace('worthwhile','diffcult',$details);

echo '<pre>';
echo $replaceString;
echo '</pre>';

// string to uppercase


echo '<pre>';
echo strtoupper($details);
echo '</pre>';


// string concatination
$firstName = "Daniel ";
$lastName = "Ezeali ";
$Address = "Owerri ";
$age = 22;

$allDetails = $firstName . $lastName . $Address . $age;

echo '<pre>';
echo $firstName[0];
echo '</pre>';



echo '<pre>';
echo "My name is $firstName $lastName, I stay in $Address and i am $age years old";
echo '</pre>';




echo '<pre>';
echo "My name is ${firstName} ${lastName}, I stay in ${Address} and i am ${age} years old";
echo '</pre>';



$isTodayTuesday = true;

$stringType = true;

echo '<pre>';
echo gettype($stringType);
echo '</pre>';


// echo print_r var_dump

print_r($details)


?>
