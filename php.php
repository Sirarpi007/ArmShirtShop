//<?php

// 11
// $a = 8;
// $x = 5;
// $b = 2;
// if ($a ^ 2 + $b ^ 2 > 5) r{
//     $y = 3 * exp($a - $x) + log(($a ^ 2 + $b ^ 2 + 5), 3);
// } else if ($a ^ 2 + $b ^ 2 < 1) {
//     $y = (log($a + $b)) ^ 4;
// } else {
//     $y = -3;
// }
// echo $y;



// 12
// $a=8;
// $x=5;
// if($x>=-5&$x<=5)
// {
//     echo (1+$a^2)^6;
// }
// else if($x>5){
//     echo cos(log(abs($x),10)^2)+$x^8;
// }
// else{
//     echo $a;
// }



// 13
// $a=8;
// $x=5;
// $b=2;
// if($a+abs($b)<-5){

//     $y=exp(abs($a+$x)*cos($a+$b+$x)^2);
// }
// else if($a+abs($b)>2){
//     $y=(atan($a+$x)^1/3);
// }
// else{
//     $y=$a+abs($b);
// }
// echo $y;


// 14
// $a = 8;
// $x = 5;
// $b = 2;
// if ($a + $b < 3) {
//     $y = atan($a + $b) ^ 4;
// } else if ($a + $b > 5) {
//     $y = log($a + $b, 8) ^ 2;
// } else {
//     $y = $a ^ 15;
// }
// echo $y;

// 15
// $a = 8;
// $c = 5;
// $b = 2;
// if ($c < 1 & $c > -1) {
//     $y = $b + (tan($c + $a)) ^ 5;
// } else if ($c <= -1) {
//     $y = cos(log(abs($x) + $x ^ 8) ^ 2);
// } else {
//     $y = $a ^ 18;
// }
// echo $y;


// 16
// $a = 8;
// $x = 5;
// if (abs($a) < 3) {
//     $y = (sin(abs($x + $a)) ^ 2) + (cos($x ^ 2)) ^ 2;
// } else {
//     $y = ($a ^ 2 + $x ^ 2) ^ 1 / 4 * log($a ^ 2 + $x ^ 4, 2);
// }
// echo $y;

// 17
// $a = 8;
// $z = 5;
// if (abs($a) > 3) {
//     $y = (log(4 + $a ^ 2, 2)) ^ 5 + tan($z + $a);
// } else {
//     $y = ($z ^ 4 + 4 * $a) ^ 5;
// }
// echo $y;

// 18
// $z = 8;
// $x = 5;
// if ($x <= 1 & $x <= 7) {
//     $y = (abs($x) + 2 * abs($z)) ^ 1 / 4 + exp(abs($x + 1));
// } else {
//     $y = (tan($x + $z) ^ 7) ^ 2;
// }
// echo $y;


// 19
// $a = 8;
// $b = 5;
// $c = 6;
// if ($a + $b < 7) {
//     $y = (1 / tan($a ^ 2 + $b ^ 2 + $c)) ^ 2;
// } else {
//     $y = 10 ^ -7;
// }
// echo $y;

// 20
// $a = 8;
// $b = 5;
// if ($a < 3) {
//     $y = exp(cos($x + $a + $b) * tan($a + $b ^ 2));
// } else {
//     $y = log(4 + $a ^ 2 + $b ^ 2, 3);
// }
// echo $y;


// fibonachi, kataryal, faktorial
// echo "<form name='frm' action='#' method='post'>
// <input type ='text' name='x_tiv'>
// <input type ='submit' name='sub'>
// </form>";
// $y=1;
// if(isset($_POST['sub']) )
// {
//     $x=$_POST['x_tiv'];
//     for($i= 1;$i<=$x;$i++)
//     {
//         $y*=$i;
//     }
// }
// echo $y;

// $y = "";
// if (isset($_POST['sub'])) {
//     $x = $_POST['x_tiv'];
//     for ($i = 1; $i <= $x; $i++) {
//         $sum = 0;
//         for ($j = 1; $j < $i; $j++) {
//             if ($i % $j == 0) {
//                 $sum += $j;
//             }
//         }
//         if ($sum == $i) {
//             $y .= $i . " ";
//         }
//     }
// }
// echo $y;


// $y = "";
// if (isset($_POST['sub'])) {
//     $x = $_POST['x_tiv'];
//     $a = 0;
//     $b = 1;
//     for ($i = 1; $i <= $x; $i++) {
//         $y .= $a . " ";
//         $temp = $a + $b;
//         $a = $b;
//         $b = $temp;
//     }
// }
// echo $y;

// $student=array("name"=>'Ani',"surname"=>"Stepanyan","age"=>"19","email"=>"barev@am.com","scholarship"=>"Yes");
//  foreach($student as $k=>$v)
//  {
//     echo "$k: $v <br>";
//  }

//  $lecturer=["name"=> "Vararzdat","surname"=> "Hambaryan","email"=> "hamb@gmail.com",] ;
//  foreach($lecturer as $l=>$m)
//  {
//     echo "$l: $m <br>";
//  }
// ?>


?>