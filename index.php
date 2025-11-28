<?php

// for($i=1;$i<=10;$i++){
//     for($j = 1; $j<=10 ; $j++){
//         $p = $i * $j;
//         echo "$i x $j = $p " .  "<br>";
//     }
//     echo "<br>";
        
// }

// $n=5;
// $factorial=1;
// for($i=1 ; $i<=$n ; $i++){
//     $factorial = $factorial * $i;
//    echo "Factorial of $n is: $factorial ";
// }

// $n = 10; // যতগুলো সংখ্যা দেখতে চাও
// $a = 0;
// $b = 1;

// echo "Fibonacci Series up to $n terms: <br>";

// for ($i = 1; $i <= $n; $i++) {
//     echo $a . " ";
//     $next = $a + $b;
//     $a = $b;
//     $b = $next;
    
// }

// for($i = 1 ; $i <=100 ; $i++){
//     if($i <=51 || $i >=75){
//          echo $i. "<br>";
//     }
       

// }
//  for($i = 1 ; $i <= 100 ; $i++){
//     if($i >= 50 && $i <=70 ){
//         continue;
//     }
//      echo $i."<br>";

//  }

//  for($i = 1 ; $i <= 100; $i++){
    
//      if($i % 15 == 0){
//         echo"FizzBuzz";

//      }
//  elseif($i % 3==0 || $i % 5 == 0){
//         echo $i . "<br>";

//      }
//  }
//  for($i = 1; $i<=50 ; $i++){
//     echo ($i % 7 == 0 && $i % 5 == 0) ? "Magic<br>" 
//          : ($i % 7 == 0 ? "Seven<br>" 
//          : ($i % 5 == 0 ? "Five<br>" : $i."<br>"));

//  }





// for ($i = 1; $i <= 10; $i++) {
//    if($i > 0){
//      echo "positive <br>";
     
//    }
//    elseif($i < 0){
//     echo "nagative";

//    }
// }



// function ami(string $name , int $age){
//     return "my name is {$name} and i am {$age} years old ";
// }

//   echo ami("preetom",26)


// function ami( string $name = "",int $birtyear = 0)
// {
//   $age = 2025 - $birtyear;
//   if($age >=18)
//     echo " {$name } vote deo";
//   else{
//     $after = 18 - $age;
//     echo " {$name } tumi {$after} bochor por vote dite parba ";
//   }
// }
 
//  echo ami('jerin','2017');

 

// function cinvart(int $amount, string $currancy): string {
//   $rate = " ";
//   switch($currancy){
    
//     case "doller":
//       $rate = 123 ;
//       break;
//        case "erani":
//       $rate = 0.0029 ;
//       break;
//        case "rupi":
//       $rate = 1.38 ;
//       break;
//        case "afghani":
//       $rate = 1.83 ;
//       break;
      
//   }
//   $taka = $rate * $amount ;
//   return "{$amount} {$currancy} = {$taka}BDT";

// }

// echo cinvart(280,"rupi"); 




// problem 1
// function loop( int $num1 =0, $num2=0){
//   if( $num1 < $num2){
//      for($i = $num1 ; $i <= $num2 ; $i++){
//         echo "$i <br>";
//       }

//   }
//   else{
//      for($i = $num1 ; $i >= $num2 ; $i--){
      
//       echo "$i <br>";
//      }
//     }
 

// }
// echo loop(1,10)."<br>";

// echo loop(10,1);



// problem 2
//  

// problem 3
// Function area($w,$l,$b,$h,$a,$r){
//   $pi = 3.1616;
//   $rectangle = $w*$l;
//   echo "rectangl is $rectangle <br>";
//   $square = pow($a,2);
//   echo "square is $square <br>";
//   $circle = $pi*(pow($r,2));
//   echo "circle is $circle <br>";
//   $triangle = $b*$h;
//   echo "triangle is $triangle <br>"; 

// }
// echo area(2,5,4,5,8,9);

// function bim( $w,  $h){
//     $bmi = $w / pow($h,2);

//     if ($bmi < 18.5){
//         echo " $bmi Underweight";

//     }
//     elseif($bmi >= 18.5 && $bmi <= 24.9){
//         echo " $bmi Normal";
//     }
//      elseif($bmi >= 25 && $bmi <= 29.9){
//         echo " $bmi Overweight";
//     }
//      elseif( $bmi >= 30){
//         echo " $bmi Obese";
//     }


//  }

// echo bim(80 ,1.65 );

// function d(string $title ,string $color, int $fontsiz, string $alin , string $bgcolor ){
//     return "
//     <div class='formcontrol' style='text-align: {$alin};background-color : {$bgcolor}';>
//     <h1 style = 'color:{$color}; font-size={$fontsiz}px;'>{$title}</h1>
//     </div>
//     <div class='formcontrol'style='text-align: {$alin};'>
//     <button style = 'color:{$color}; font-size={$fontsiz};background-color : {$bgcolor};  '>{$title}</button>
//     </div>
//     ";

// }
// echo d("laravel developer", "blue",16,"center","yellow");

// function img(string $img){
//     return "
//     <img src = '{$img}' alt ='image' style ='width:100px;heightL:100px; border-radius: 10px;'>
//     ";

// }
// echo img("https://www.k12digest.com/wp-content/uploads/2024/03/1-3-550x330.jpg");



// $a =["preetom","jaml","kuddus"];
// echo "<pre>";
// print_r($a);
// echo "</pre>";

//  $a =["preetom","jamal","kuddus"];
// foreach ($a as $b):

// $friend = [
//     "jaml" => ["khanpur" , "badda","gulshan"],
//     "kamal" => "gulashan ",
//     "korim" => "uttara ",
//     "jarina" => "mirpur ",
//     "fariha" => "dhanmunddi ",
//     "hadi" => "motijheel ",
//     "badhon" => "framgate ",


// ];
// foreach ($friend as $f){
//     echo "$f"."<br>";




// session_start();
// $_SESSION['name'] = "preetom";
// $_SESSION['skill'] = "laravel";
// $_SESSION['age'] = 20;

// print_r($_SESSION);
// session_destroy();

// setcookie("name","preetom",x time() +10);


// $sql = new mysqli('localhost','root','','ddd');
// $sql ->query("CREATE DATABASE ddd");
// $data ="CREATE TABLE users(
// id INT(11) AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(100),
// age INT(3) NOT NULL,
// phone VARCHAR(20) UNIQUE


// )";

// $sql->query($data)

// $sql = new mysqli('localhost','root','','ddd');

// $data = "CREATE TABLE developers(
// id INT(11) AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(100) NOT NULL,
// age INT(3) Not NULL ,
// cell INT(20) NOT NULL UNIQUE,
// location ENUM('mirpur','uttara','gulshan','banani'),
// gender ENUM('female','male'),
// skill ENUM('php','java','python'),
// status BOOLEAN DEFAULT true,
// trash BOOLEAN DEFAULT false,
// created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
// updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
// UNIQUE KEY unique_cell (cell)

// )";

// $sql -> query($data);
// $data = "INSERT INTO developers(name,age,cell,location,gender ,skill) 
// VALUE('name','20','0177494072','uttara','male','java')";

// $sql -> query($data);


?>