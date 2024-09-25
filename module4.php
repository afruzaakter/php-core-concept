
<?php

// php comment 

// single comment 1
 # single comment 2
/* 
multi comment
*/

// *************************************************************************

// Data Type(int, float, string, boolean, array, object, null);

// Example:

// $number = 1;
// $float = 1.1;
// $string = 'Hello';
// $boolean = true / false ;
// $array1 = array(1,2,3);
// print_r($array1 , );
// $array2 = [1,2,3] ;
// print_r($array2);


// Printing array
// print_r( $array2);
// var_dump($array1);    // var_durm er output datatype soho ashe

// **********************************************************************
// string Concatenation
// $name = 'Afruza';
// $age = 18;

// echo "My name is " . $name . " and my age is ". $age . "<br>";

// echo "My name is $name and my age is $age" . "<br";

// echo 'My name is $name and my age is  $age' . "<br>";
// echo "My name is {$name} and my age is  {$age}";

// ********************************************************************

// loop(for, while , do while, foreach)
  
//For loop

// for($i =1; $i<=10; $i++){
//     echo $i . "<br>";
// }


// while loop 
// $i =1;
// while($i<=5){
//     echo $i ."<br>";
//     $i++;
// }



//do while loop

// $i = 1;
// do{
//     echo $i . "<br>";
//     $i++;
// }while($i<=3);

 
// foreach loop 

// $fruits = ["apple", "banana", "orange"];

// foreach($fruits as $fruit){
//     echo $fruit . "<br>";
// }

// index ber korar sohoj opai 

// $fruits_count = count($fruits);
// echo $fruits_count . "<br>";


// index soho print kore

// $fruits = ["apple", "banana", "orange"];

// for($i =0; $i<$fruits_count; $i++){
//     echo $i . "<br>";
//     echo $fruits[$i]. "<br>";  

// }

// Output: 3
// 0
// apple
// 1
// banana
// 2
// orange

// ****************************************************************

// php Conditions (if  else, if else if  else )

// if else conditions

// $age = 17;

// if($age >= 18) 
// echo "You can vote". "<br>";
// else echo "You can not vote" . "<br>";

// nested if else 

// if($age >=18){
//     echo "You can vote". "<br>";
//     if(false){
//         echo "true". "<br>";
//     }else{
//         echo "false". "<br>";
//     }
// }else{
//     echo "You can not vote". "<br>";
// }


// $marks = 33;

// if($marks >= 80){
//     echo "A+";
// }else if($marks >= 70 && $marks < 80){
//     echo "A";
// }else{
//     echo "fail";
// }


// ***********************************************************************

// Php switch case 

// $day = "Friday";

// switch( $day ) {
//     case "Sunday":
//         echo"Sunday";
//         break;
//     case "Monday":
//         echo "Sunday";
//        break;
//     case "Tuesday":
//         echo "Tuesday";
//         break;

//     case "Wednesday":
//         echo "Wednesday";
//         break;
//     case "Tuesday":
//         echo "Tuesday";
//         break;
//     case "Friday":
//         echo "Friday";
//         break;
//     default:
//      echo "No such day";
// }

// **********************************************************************

// Php Break and Coninue 

// for ($i=1 ; $i<=10; $i++){
//     if($i ===5){
//         break;
//     }
//     echo $i . "<br>";
// }

// Output: 1 2 3 4

// for ($i=1 ; $i<=10; $i++){
//     if($i%2 ===0){
//         continue;
//     }
//     echo $i . "<br>";
// }

// Output: 1 3 5 7 9

// *******************************************************

// Match Php 

// $sub = 'CSS';

// $value = match($sub){
//     'CSS'=> 'CSS Course',
//     'PHP'=> 'PHP Course',
// };
// echo $value .'<br>';

// Output: CSS Course

// *************************************************
// String Count / word  count

// $name = 'Sonia';
// $string_count = strlen(($name));
// echo "This string contains  $string_count character" .'<br>';

//  or

// echo 'This string Contains'. strlen($name). 'character' . '<br>';

// String Replace 
// $str = 'Hello John';
// echo str_replace('Hello', "Hi", $str);

// Output: Hi John 

// Lowecase
// $str = "heLLo woRID";
// echo strtolower($str) . "<br>";
// Uppercase
// $str = "heLLo woRID";
// $str = "hello world";
// echo strtoupper($str) . "<br>";
// echo ucfirst($str) . "<br>";
// echo ucwords($str) . "<br>";
// echo ucwords(strtolower($str))

// Triming mane space kete dewa

// $name = "   prince   ";
// echo ltrim($name,"<br>");
// echo rtrim($name,"<br>");
// echo trim($name,"<br>");

//  html ar formate a output dekhano 

// $str = "<script>alert('hello world');</script>";
// $plain_string =  htmlspecialchars($str);
// echo $plain_string;

// output: <script>alert('hello world');</script>
// $str = "<h1>alert('hello world');</h1>";
// $plain_string =  htmlspecialchars($str);
// echo $plain_string;
// output: <h1>alert('hello world');</h1>

// $str = "Hello World";
// $names_array = explode(" ", $str);
// print_r($names_array);
// output: Array ( [0] => Hello [1] => World )

// echo $names_array[0]
// output: Hello 


// $name = ["John", "don", "Peter"];
// $names_string = implode(",", $name);
// echo $names_string;

################################################################

// Module - 4 

// Array(indexed array, associative array, multi-dimensional array)

// Index array

// $number =[1,2,3,4,5,6];

// echo $number[2] . "<br>";
// output: 3
// $number[2] = 50;
// echo $number[2] ."<br>";

// $person = [
//     "name" => "John",
//     "age" => 30,
//     "best_friend"=> "Polas",
// ];
// echo $person["name"]. "<br>";
// echo $person["best_friend"]. "<br>";

// foreach($person as $key => $value){
//     echo $key . ":" . $value ."<br>";
// }

// output:
// name:John
// age:30
// best_friend:Polas
// ----------------------------------------
// foreach($person as $value){
//     echo   $value ."<br>";
// }
// --------------------------------------------
// output: 
// John
// 30
// Polas


// ---------------------------------------------
// Multidimentional array 

// $marks =[
//     [30,52,85],
//     [50,52,88],
//     [30,92,85],
// ];

// print_r($marks[1][2]);
// output: 88 
// print_r($marks[1]);
// output: Array ( [0] => 50 [1] => 52 [2] => 88 )

// foreach($marks as $mark){
//     print_r($mark);
// }

// Output: Array ( [0] => 30 [1] => 52 [2] => 85 ) Array ( [0] => 50 [1] => 52 [2] => 88 ) Array ( [0] => 30 [1] => 92 [2] => 85 )


$marks=[
    "bangla" => [25,52,89],
    "english" => [85,95,86],
    "math" => [85,75,86],
];

//  foreach($marks as $key => $value){
//    echo $key . " : ";
// };
// output : 
// bangla : english : math :

//  foreach($marks as $key => $value){
//    echo $key . " : ";
//    var_dump($value);
//    foreach($value as $mark){
    // echo $mark . "<br> ";
//  };
// };

// output:  
// bangla : 25
// 52
// 89
// english : 85
// 95
// 86
// math : 85
// 75
// 86

// var durp output:
// C:\wamp64\www\php\module4.php:345:
// array (size=3)
//   0 => int 25
//   1 => int 52
//   2 => int 89
// C:\wamp64\www\php\module4.php:345:
// array (size=3)
//   0 => int 85
//   1 => int 95
//   2 => int 86
// C:\wamp64\www\php\module4.php:345:
// array (size=3)
//   0 => int 85
//   1 => int 75
//   2 => int 86

// ***************************************

// Array Remove last element php system 
// $number = [1,2,5,4,6,3];
// array_pop($number);
// print_r($number);

// Array Remove First element php system 
// $number = [1,2,5,4,6,3];
// array_shift($number);
// print_r($number);
// output: 
// Array ( [0] => 2 [1] => 5 [2] => 4 [3] => 6 [4] => 3 )


// add First element array 
// $number = [2,4,5,6,8,7];
// array_unshift($number, 80);
// print_r($number);

// output: Array ( [0] => 80 [1] => 2 [2] => 4 [3] => 5 [4] => 6 [5] => 8 [6] => 7 )

// Adding element in any position 
// $fruits = ["apple","banana","mango"];
// array_splice($fruits, 1,0, "orange");
// print_r($fruits);

// output: Array ( [0] => apple [1] => orange [2] => banana [3] => mango )


// Deleting element in any position 
// $fruits = ["apple","banana","mango"];
// array_splice($fruits, 1,1);
// print_r($fruits);

// output :Array ( [0] => apple [1] => mango )

// array_slice(array $input, int $offset)

// push last array data add kore 


// $fruits = ["apple","milk","orange","banana","mango"];
// array_push($fruits, "orange");
// print_r($fruits). "<br>";

// $new_fruits = array_slice($fruits, 1,2);
// print_r($new_fruits);


// output: Array ( [0] => milk [1] => orange )


// reverse mane last er dik theke data first show kore 

// $fruits = ["apple","milk","orange","banana","mango"];

// $reverse_fruits = array_reverse($fruits);
// print_r($reverse_fruits);

// output: Array ( [0] => mango [1] => banana [2] => orange [3] => milk [4] => apple )


// if(in_array("mango", $fruits)){
//     echo"It's there";
// }else{
//     echo "It's not there";
// };
// output: It's there 

// **************************************************

//  Php Function 

// function add($num1, $num2){
//     return $num1 + $num2;
// };

// echo add(5,6);
// default value set kora 

// function add($num1, $num2=0){
//     return $num1 + $num2;
// };
// echo add(5);

// variadic Function 
// function sum(...$numbers){
//     var_dump($numbers);
//     $result = 0;
//     foreach($numbers as $number){
//         $result = $result + $number;
//     }
//     return $result;
// }

// echo sum(1,2,3,4,5);
// output: 15

// ***************************************
// php arrow function 

// $sum = fn($num1,$num2)=> $num1+$num2;

// echo $sum(40,40);

// Named Argument 

// function greet($name = "Guest", $msg="Hello"){
//     return $msg . " " . $name
// ;}
// echo greet("Good Morning", "Afruza");

// output: Afruza Good Morning


// function intro($name = "Afruza", $age = 20){
//     return "My name is " . $name . " and my age is ". $age;
// }
// echo intro();
// echo intro(age:40, name: "sonia");

// output: My name is Afruza and my age is 20
// output: My name is sonia and my age is 40


// Type Hinting 

// function add(int $num1 , int | string $num2) : int{
//     return $num1 + $num2;
// }
// echo add(1,"9");
// output: 10

// ********************************************

// Object oriented Programming 

// class er vitore propertis and method thake 

// class Person{
//     // properties 
//     public $name = "John";
//     public $age = 25;
//     public $weight = 50;
    
//     // Method 
//     public function sayName(){
//         return "Hello, My name is". $this->name;
//     }
   
// }
//instance/Object or Initialization 

// $person1 = new Person();
// echo $person1 -> sayName();

// output: Hello, My name isJohn

// *****************************************************

// Constractor dainamic way change  Abstraction OOP

class Person{
    // properties 
    // public $name ;


// $name ke kew bahir hote access korte na pare tar jonno
//    public bad diye private kore dite hobe 
   
    //   private $name;
     protected $name;

    public $age ;
    public $weight;

    public function __construct($name, $age, $weight){
        $this -> name = $name;
        $this ->age = $age;
        $this ->weight = $weight;
    }
    
    // Method 
    public function sayName(){
        return "Hello, My name is". $this->name ;
    }
   
}
// //instance/Object or Initialization 

// $person1 = new Person("Afruza", 25 , 40);
// echo $person1 -> sayName() . "<br>";

// $person1->name = 'X';

// // output: Hello, My name isAfruza


// $person2 = new Person("Sonia", 35 , 48);
// echo $person2 -> sayName() . "<br>";

// output: Hello, My name isSonia


//object oriented Programming (OOP) 4 principles

// 1. Encapsulation
// 2. Inheritance 
// 3. Polymorphism
// 4. Abstraction 



// inheritance OOp babar sompotti selera pabe 

// akta class er vitore are akta class doke dewa 


class Student extends Person{
    public $student_id;
    public function __construct($name, $age, $weight, $student_id){
        parent::__construct($name, $age, $weight);
        $this -> student_id = $student_id;
    }
    public function studentInfo(){
        return "Hello, My name is " . $this ->name .  " and my id is" . $this ->student_id . " ";
    }

}

$student1 = new Student("Michle", 20, 40, 458525);
echo $student1->sayName() . "<br>";
echo $student1->studentInfo() . "<br>";

// output: Hello, My name isMichle
// Hello, My name is Michle and my id is458525


?>
