<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<?php 
/* =============================================================
 php class 3 

 */

//  $task = 'Read';
//  echo $task;
//  echo "\n";
//  $task = "Write";
//  echo $task;
//  echo "\n";

//  $age = 12;
//  var_dump($age);

// class 4 php

/*
=============================================================
php data type 
 
Interger  Int
Double  float
Boolean 
Null
String
Array
Object
Resource

*/
// $result = true;
// var_dump($result);

// $name = "Earth";
// $uname = strtoupper($name);
// echo "We're living on {$uname} <br/> ";
// printf(" We're living on %s", $name  );

// $fname = "Afruza";
// $mname = "Akter";
// $lname = "Sonia";

// printf(" <br/> My %s Name is %s %s %s" , "Full" , $fname, $mname, $lname);

// echo and printf ar modhe parthoko 

// $planet1 = "Mercury";
// $planet2 = "Jupiter";

// echo"The smallest planet is ".$planet1." and the biggest planet is ".$planet2." <br/> " ;

//  echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}  <br/> "; 
// printf("The smallest planet is %s and the biggest planet is %s" , strtoupper($planet1), strtolower($planet2 ));


/*
=============================================================
php class 7 addition and subtraction multiplication and division 

Arithmatic Operator  +, - , * , / , %

*/

// $number = 12;
// $numbers = $number + 13;
// same kotha 
// $number += 13;

// $allNumber = 12;
// $addnumber= $allNumber + 20 ;
// $subNum = $allNumber - 10; 
// $mulNum = $allNumber * 2; 
// $divNum = $allNumber / 2; 

// echo"$numbers
// <br> $number
// <br> $addnumber  
// <br/>$subNum 
// <br/>$mulNum  
// <br/>$divNum ";

// $number = 12;
// $number -= 5;    // number theke 5 biyog korte chaile
// echo $number;
 
 // $number = 12;
//$numbers = (13-5) * 6;  // or 
// $numbers = (24-4) / (7-2);
// echo $numbers;

/* 
=============================================================
php class 8 More on Addition subtraction 
   for loop er kethe beshi bebhar hoy
*/

// $n = 7;
// $m = $n++;
// echo" $m <br/>  $n" ;

/*
 er mane holo
 $m = $n++
 $m = $n;
 $n = $n + 1 ;

 Output : 7 and 8 
*/

// $n = 7;
// $m = ++$n;
// echo" $m <br/>  $n" ;

/*
 er mane holo
 $m = ++$n
 $n = $n + 1 ;
 $m = $n;
 Output : 8 and 8 
*/


/* 
=============================================================
php class 9 Discussion of different
   bainary, octal , decimel , hexadecimel
*/

// $n = 12;
// $o = 017;
// $h = 0x1B;
// printf("The Number is %d and %d and %d ", $n , $o , $h);

// Binary number ber kora

// printf( " The binary equivalent of %d is %b", 1212 ,1212);
// printf( " The binary Hexadecimal  equivalent of %d is %X", 1212 ,1212);
// printf( " The binary Octal equivalent  of %d is %o", 27 , 27);



/* 
=============================================================
php class 10 The magic of the printf function
   
 variable showpe kora system
*/

// $fnamae = "Isaac";
// $lnamae = "Newton";
// $mnamae = "Nothing";

// %3$s use korle printf ar vitore ' ' single cottetion use korte hobe 

// printf(' His name is %3$s, %1$s %2$s ', $fnamae, $mnamae, $lnamae);

// doshomic er pore 2 gor rakte hobe

// $num = 14.125487;
// printf(" %.2f ", $num);


// jog korar somoi pattan thik rakhar jonno 0 bosanor system 

// $n = 123;
// $m = 12;
// printf("%04d  <br/> ", $n  );
// printf("%04d  <br/> ", $m  );
//   // or 
// printf("%05d  <br/> ", $n  );
// printf("%05d  <br/> ", $m  );

// Output: 0123
// Output: 0012

// Output: 00123
// Output: 00012

// dosomic er jonno jog korar somoi pattan thik rakhar jonno 0 bosanor system 

// $n = 123.3253;
// $m = 27.155;
// printf("%08.2f  <br/> ", $n  );
// printf("%08.2f  <br/> ", $m  );

// =============================================================
/* php class 11 A few words about sprintf
printf holo sorasori output dekhai 
are sprintf holo output return kore are akta variable rakhe
example
*/

// $fname = "Afruza";
// $lname = "Sonia";
// $output = sprintf("His name is %s %s", $fname , $lname);

// echo $output;
// echo strtoupper($output);

// =============================================================
/* php class 12 Discussion of condition(Logic) and Logical Operators in php.
1. even and odd number if else condition
2. // logical operators
    ==  2ti sonkha soman ki na check kore
    !=  2ti sonkha somanna
    >
    <
    >=
    <=

*/

// $n = 12;
// if($n % 2 == 0){
//   echo " $n is an even number ";
// } else {
//    echo " $n is an odd number ";
// }

// $m = 12;
// $n = 12;
// if($m != $n){
//    echo "N is not equal to N";
// }

/*
    >
    <
    >=
    <=
*/
// $alam = 100;
// $rahim = 1100;

// if($alam>=$rahim){
//    echo "Alam has same or more money than Rahim ";
// }
// elseif($alam > $rahim){
//    echo " Alam has more money than Rahim";
// }
// elseif($alam < $rahim){
//    echo " Alam has less money than Rahim";
// }
// elseif($alam == $rahim){
//    echo " Alam and Rahim has same amount of money";
// }

/*
    && operator
*/

// $age = 13;
// if($age >= 13 && $age <= 19){
//    echo "This person is a teenager";
// }else {
//    echo "This person is not a teenager";
// }

/*
   || or operator
*/

// $food = "tuna";

// if("tuna" == $food || "salmon" == $food){
//    echo "{$food} has vitamin D";
// }
// elseif("apple" == $food){
//    echo "Apple doesn't contain vitamin D ";
// }
// else{
//    echo " We don't know if {$food} contains vitamin D ";
// }


// =============================================================
/* php class 13 If else, leap years and How to shortcut complex Conditions
  Leap year ber kora
  condition 1: divisible 4 ? 4 diye vag jabe bojate
  condition 2: divisible 100 ? 100 diye vag jabe bojate
  condition 3: divisible 400 ? 400 diye vag jabe bojate
*/

$year = 2000;
// if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
//    echo" {$year} is a leap year";
// }elseif($year % 4 == 0 && $year % 100 == 0){
//    echo" {$year} is not a leap year";
// }

// elseif($year % 4 == 0){
//    echo" {$year} is a leap year";
// }
// else{
//    echo" {$year} is not a leap year";
// }

// oporer code shor a kora 

// if($year % 4 == 0 && ($year % 100 !=0 || $year % 400 ==0)){
//    echo" {$year} is a leap year";
// }else{
//    echo" {$year} is not a leap year";
// }


/* 
=============================================================
php class 14 Nested if Else and Readability of code

*/




/* 
=============================================================
php class 14 Nested if Else and Readability of code
1. Readable code
2. Readable code
*/
// 1.Un Readable code Example

// $condition1 = true;
// $condition2 = false;
// $condition3 = true;


// if($condition1){
//    if($condition2){
//       if($condition3){
//          echo "Hello <br/>";
//       }else{
//           echo " No 1  <br/>";
//       }
     
//    }else{
//        echo " No 2  <br/>";
//    }
// }else{
//     echo " No 3  <br/>";
// }

// 1. Readable code Example

// if($condition1 && $condition2 && $condition3){
//    echo"Hello";
// }elseif($condition1 && $condition2){
//     echo " No 1";
// }elseif($condition1){
//     echo " No 2";
// }else{
//     echo " No 3";
// }




/* 
=============================================================
php class 15 Working with Ternary Operators and Nested Ternary
*/
// $n = 12;
// if(12 == $n){
//    echo " Twelve <br/>";
// }elseif(10 == $n){
//    echo "Ten <br/>";
// }else{
//    echo " A Number <br/>";
// }

// Ternary operator Example 
// $result = (12 == $n) ? "Twelve" : "A Number";

// multi condition 

// $result = (12 == $n) ? "Twelve" : (10 == $n) ? "Ten" : "A Number";
// echo $result ;


// if($n % 2 == 0){
//    echo "Even Number";
// }else{
//    echo "Odd Number";
// }

// Ternary operator Example 

// $results = ($n % 2 == 0) ? " {$n} is an Even Number " : " {$n} is an Odd Number " ;
// echo $results;

/* 
=============================================================
php class 16 Another way to check condition
swith case 
1. even and odd number
2. akadik condition use example
*/

// $n = 13;
// $r = $n % 2;

// switch($r){
//    case 0: echo " {$n} is an even number <br/> ";
//    break;
//    default: echo "{$n} is an odd number <br/>";
// }


// $color = "red";

// switch($color){
   /*
   case 'red': echo "Red is our Favorite color";
   break;
   case 'green': echo "Green is our Favorite color";
   break;
   */

   // short code 

   // case 'red': case 'green':
   //    echo ucwords($color). " is our favorite color";
   //    break;
   // case 'blue': echo "blue is not our Favorite color";
   // break;
   // default : echo "This color is ok";

// }



/* 
=============================================================
php class 17 More on switch case
nested switch case
*/

$n = 13;
$r = $n % 2;

// old switch nested system , code is not readable 

// switch ($r) {
//    case 0 :
//       switch ($n){
//          case $n>0: echo "$n is a positive even number <br/>";
//          break;
//          case $n<0: echo "$n is a negative even number <br/>";
//          break;   
//       }
//       break;
//    default:
//    switch ($n){
//       case $n>0: echo "$n is a positive odd number <br/>";
//       break;
//       case $n<0: echo "$n is a negative odd number <br/>";
//       break;   
//    }
// }


// New switch nested system , code is  readable same kaj

// switch(true){
//    case(0 == $r && $n > 0):
//       echo "$n is a positive even number ";
//       break;
//    case(1 == $r && $n > 0):
//       echo "$n is a positive odd number ";
//       break;
//    case(0 == $r && $n < 0):
//       echo "$n is a negative even number ";
//       break;
//    case(-1 == $r && $n < 0):
//       echo "$n is a negative odd number ";
//       break;
// }


/* 
=============================================================
php class 18 Intersting issue with switch case
 
*/


// $string = " 8balls";
// switch($string){
   
// }


/* 
=============================================================
php class 19 Operator Precedence in PHP
 
*/


echo 'Hello php code'



?>

</body>
</html>