<?php
/*
Solve each of the following tasks, and submit your solution via GitHub:

Write a PHP function that accepts an array of strings and return the longest string found in the array,
the function should have a 2nd argument that will hold the index of the item that have the longest
string in the input array.
Write a function that accepts 2 arrays and return a new array that holds the value of multiplying each
item in the first array by the corresponding item in the second array.
Write a function to calculate the factorial of a number (a non-negative integer). The function accepts
the number as an argument.
Write a function to check whether a number is prime or not.
*/

//1# Write a PHP function that accepts an array of integers and
//   return a new array after removing odd numbers.
function my_remove_odd(array $arr){
    $odd=[];
    for($i=0;$i<count($arr);$i++) {
        if(is_integer($arr[$i])){
            if( $arr[$i] % 2 === 0){
                $odd[]=$arr[$i];
            }
            
        }
        // $odd[]=$arr[$i] % 2 === 0;
     }
     return $odd ;
    
}
// print_r(my_remove_odd([1,2,3,4,5]));    
print_r(my_remove_odd([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));    

//1_2 -----------------------------




//* echo(var_dump(is_integer(5)));
function my_remove_int(array $arr){
    $is_int=["Is_Integer"];
    $not_int=["Not_Integer"];
    for($i=0;$i<count($arr);$i++) {
        if(is_integer($arr[$i])){
            $is_int[]=$arr[$i];  
        }else{
            $not_int[]=$arr[$i];
        }
     }
     return [$not_int, $is_int];
    
}
print_r( my_remove_int([1,2,3,4,'whatever']));


//2# Write a PHP function that accepts an array of strings 
//   and return the longest string found in the array,
//   the function should have a 2nd argument that will hold the index of the item that have the longest
//   string in the input array.

function my_search_longStr($array, &$index) {
    $longestStr = '';
    $index = -1;

    foreach ($array as $key => $value) {
        if (strlen($value) > strlen($longestStr)) {
            $longestStr = $value;
            $index = $key;
        }
    }

    return $longestStr;
}

$strings = ['app', 'pc', 'game'];
$index = -1;
my_search_longStr($strings, $index);

//3 # Write a function that accepts 2 arrays
// and return a new array that holds the value of multiplying
// each item in the first array by the corresponding item in the second array.

function my_multi_arr($arr1, $arr2) {
    $result = array();
    if (count($arr1) === count($arr2)) {
        for ($i = 0; $i < count($arr1); $i++) {
            $result[] = $arr1[$i] * $arr2[$i];
        }
    }

    return $result;
}
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [2, 4, 6, 8, 10];

print_r(my_multi_arr($arr1, $arr2));

//4# Write a function to calculate the factorial of a number (a non-negative integer).
// The function accepts the number as an argument.

function factorial($number) {
    if ($number === 0 || $number === 1) {
        return 1;
    }

    $result = 1;

    for ($i = 2; $i <= $number; $i++) {
        $result *= $i;
    }

    return $result;
}

$number = 3;
$factorial = factorial($number);
echo "Factorial of $number is: " . $factorial;

//4# Write a function to check whether a number is prime or not.

function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
$number = 17;
if (isPrime($number)) {
    echo "$number is prime.";
} else {
    echo "$number is not prime.";
}



