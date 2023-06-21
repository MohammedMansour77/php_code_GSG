<?php
//1# Write a PHP program to check whether the first two characters and last two characters of a give string are same.
function checkFirstAndLastTwoCharacters($str) {
    if (strlen($str) < 2) {
        return false;
    }
    
    $firstTwo = substr($str, 0, 2);
    $lastTwo = substr($str, -2);
    
    return $firstTwo === $lastTwo;
}

// Example usage:
$string1 = "hello";
$string2 = "abcabc";
var_dump(checkFirstAndLastTwoCharacters($string1)); 
var_dump(checkFirstAndLastTwoCharacters($string2));  
?>


//2# Write a PHP program to check if a given string starts with 'Go' or not. (Don't use "str_starts_with" function)
function startsWithGo($str) {
    $prefix = "Go";
    
    return substr($str, 0, strlen($prefix)) === $prefix;
}

$string1 = "Hello";
$string2 = "Goodbye";
var_dump(startsWithGo($string1));
var_dump(startsWithGo($string2));




//3# Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7.
function isMultipleOf3Or7($number) {
    return $number % 3 === 0 || $number % 7 === 0;
}

$number1 = 21;
$number2 = 14;
var_dump(isMultipleOf3Or7($number1));
var_dump(isMultipleOf3Or7($number2));

//4# Write a PHP program to check the largest number among three given numbers.
function check_largest_number(float $num1, float $num2, float $num3){
    if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
    } else {
        return $num3;
    }
}
echo check_largest_number(5,6,8);
echo check_largest_number(0,0,0);

//4_2 ------------------------------------
function findLargestNumber($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}
//5# Write a PHP program to check which number nearest to the value 100 among two given integers. Return 0 if the two numbers are equal.
function myCheckNumber(int $num1, int $num2) {
    if (is_integer($num1) && is_integer($num2)) {
        if ($num1==$num2) return 0;
        $numCheck=100;
        if (abs($numCheck-$num1)>abs($numCheck-$num2)) {
            return "{$num2} is nearest to 100";
        }else{
            return "{$num1} is nearest to 100";
        }
    }else{
        return "Numbers must be a integer!";
    }
    }
    echo myCheckNumber(50,70);
//5_2-----------------------------------------------
function myFindNearest($num1, $num2) {
    if ($num1 === $num2) {
        return 0;
    }
    
    $diff1 = abs(100 - $num1);
    $diff2 = abs(100 - $num2);
    
    return ($diff1 < $diff2) ? $num1 : $num2;
}
$num1 = 90;
$num2 = 110;
echo myFindNearest($num1, $num2);  


//6# Write a PHP program to find the larger value from two positive integer values
//   that is in the range 20-30 inclusive or return 0 if neither is in that range.
function myLargRang($num1, $num2) {
    $rangFirst = 20;
    $rangSecond = 30;
    
    if ($num1 >= $rangFirst && $num1 <= $rangSecond && $num2 >= $rangFirst && $num2 <= $rangSecond) {
        return max($num1, $num2);
    }
    
    if ($num1 >= $rangFirst && $num1 <= $rangSecond) {
        return $num1;
    }
    
    if ($num2 >= $rangFirst && $num2 <= $rangSecond) {
        return $num2;
    }
    
    return 0;
}

$a = 10;
$b = 25;
$c = 45;
echo myLargRang($a, $b);
echo myLargRang($a, $c);





//7# Write a PHP program to count the number of occurrences of any digit in a string.

function myCountOccNo($str) {
    $count = 0;
    
    for ($i = 0; $i < strlen($str); $i++) {
        if (is_numeric($str[$i])) {
            $count++;
        }
    }
    
    return $count;
}
$string = "777Mansour7777";
echo myCountOccNo($string); 




//8# Write a PHP program to return the sum of digits of an integer number.

function mySumDig($num) {
    $sum = 0;
    
    while ($num != 0) {
        $digit = $num % 10;
        $sum += $digit;
        $num = intval($num / 10);
    }
    
    return $sum;
}
$num = 77;
echo mySumDig($num);  


//9# Write a PHP program to reverse any string. (Don't use "strrev" function.)
function myRevStr($str) {
    $rev = '';
    
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $rev .= $str[$i];
    }
    
    return $rev;
}
$string = "Mohamed Mansour";
echo myRevStr($string);  

