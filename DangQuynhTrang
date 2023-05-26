<!-- 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không. -->
<?php
function checkNumber($number) {
    if ($number % 2 == 0) {
        echo "$number is an even number.";
    } else {
        echo "$number not an even number.";
    }
}
$number = 10; 
checkNumber($number);
?>

<!-- 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n. -->
<?php
function totalNumber($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 10; // Thay đổi giá trị n ở đây để tính tổng của các số khác
$tong = totalNumber($n);
echo "sum of numbers from 1 to $n is: $tong";
?>

<!-- 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10. -->
<?php
function multiplicationTable($n) {
    echo "<br>"."multiplication table $n:";
    for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result\n";
    }
    echo "\n";
}
for ($j = 1; $j <= 10; $j++) {
    multiplicationTable($j);
}
?>

<!-- 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không. -->
<?php
function checkString($string1, $string2) {
    $check = strpos($string1, $string2);
    if ($check !== false) {
        echo "string '$string1' contains the word '$string2'.";
    } else {
        echo "string '$string1' does not contain the word '$string2'.";
    }
}
$string1 = "Hi, hello"; 
$string2= "hello"; 
checkString($string1, $string2);
?>

<!-- 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng. -->
<?php
function maxMin($array) {
    $min = $array[0]; 
    $max = $array[0]; 
foreach ($array as $value) {
        if ($value < $min) {
            $min = $value; 
        }
        if ($value > $max) {
            $max = $value;
        }
    }
    echo "The smallest value in the array is: $min\n"."<br>";
    echo "The largest value in the array is: $max\n";
}
$array = [10, 5, 34, 1, 9, 14]; 
maxMin($array);
?>

<!-- 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần. -->
<?php
function maxMin($array) {
    $min = $array[0]; 
    $max = $array[0];
foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
        if ($value > $max) {
            $max = $value; 
        }
    }
    echo "The smallest value in the array is: $min\n"."<br>";
    echo "The largest value in the array is: $max\n";
}
$array = [10, 5, 34, 1, 9, 14]; 
maxMin($array);
?>

<!-- 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương. -->
<?php
function factorialCalculation($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorialCalculation($n - 1);
    }
}
$number = 9; 
$factorial = factorialCalculation($number);
echo "Factorial of $number is: $factorial";
?>

<!-- 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước. -->
<?php
function checkPrimes($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function checkPrimes1($start, $end) {
    echo "Prime numbers in the range $start to $end is: ";
    for ($i = $start; $i <= $end; $i++) {
        if (checkPrimes($i)) {
            echo $i . " ";
        }
    }
}
$start = 2; 
$end = 60; 
checkPrimes1($start, $end);
?>

<!-- 9. Viết chương trình PHP để tính tổng của các số trong một mảng. -->
<?php
function sumArray($array) {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return $sum;
}
$array = [7,10,16,22,32]; 
$sum = sumArray($array);
echo "The sum of the numbers in the array is: $sum";
?>

<!-- 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. -->
<?php
function printFibonacci ($start, $end) {
    $fib1 = 0;
    $fib2 = 1;
    $fib = $fib1 + $fib2;
    echo "Fibonacci numbers in the range from $start to $end is: ";
    while ($fib <= $end) {
        if ($fib >= $start) {
            echo $fib . " ";
        }
        $fib1 = $fib2;
        $fib2 = $fib;
        $fib = $fib1 + $fib2;
    }
}
$start = 2; 
$end = 90; 
printFibonacci($start, $end);
?>

<!-- 11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. -->
<?php
function checkNumber($number)
{
    $sum = 0;
    $originalNumber = $number;
    $numDigits = strlen($number);
    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, $numDigits);
        $number = (int)($number / 10);
    }
    if ($sum === $originalNumber) {
        return true;
    } else {
        return false;
    }
}
$number = 142;
if (checkNumber($number)) {
    echo "$number is number Armstrong.";
} else {
    echo "$number not is number Armstrong.";
}
?>

<!-- 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ. -->
<?php
function insertElement($arr, $element, $position)
{
   array_splice($arr, $position, 0, $element); 
   return $arr;
}
$array = [6,10,12,20,5];
$element = 5;  
$position = 3; 
$resultArray = insertElement($array, $element, $position); 
print_r($resultArray);
?>

<!-- 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng. -->
<?php
function removeDuplicates($arr)
{
    $counts = array_count_values($arr);
    $result = array_filter($arr, function ($value) use ($counts) {  
        return $counts[$value] === 1;
    });
    return array_values($result);  
}
$originalArray = [3,5,7,14,18,20,2,8];  
$filteredArray = removeDuplicates($originalArray);
print_r($filteredArray);
?>

<!-- 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng. -->
<?php
function findLocation ($arr, $element)
{
    $position = array_search($element, $arr);  
    if ($position !== false) {
        return $position; 
    } else {
        return -1; 
    }
}
$array = [1,7,10,24,5];
$element = 10;
$position = findLocation($array, $element);
if ($position !== -1) {
    echo "The position of the element $element is $position";
} else {
    echo "Element not found $element in array";
}
?>

<!-- 15. Viết chương trình PHP để đảo ngược một chuỗi. -->
<?php
function reverseString($string)
{
 $n = strlen($string);
 if($n == 1)
   {
    return $string;
   }
 else
   {
   $n--;
   return reverseString(substr($string,1, $n)) . substr($string, 0, 1);
   }
}
print_r(reverseString('6010')."\n");
?>

<!-- 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng. -->
<?php
function countNumber($array) {
    $number = count($array);
    return $number;
}
$array = [2,4,6,8,10,12,14]; 
$number = countNumber($array);
echo "The number of elements in the array is: $number";
?>

<!-- 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. -->
<?php
        function checkPalindrome($string)   
		{  
		  if ($string == strrev($string))  
			  return 1;  
		  else  
			  return 0;  
		}  
		echo checkPalindrome('madam')."<br>";
       ?>

<!-- 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng. -->
<?php
function countOccurrences($arr, $element)
{
    $count = 0;
    foreach ($arr as $value) {
        if ($value == $element) {
            $count++;
        }
    }
    return $count;
}
$array = [6, 2, 6, 9, 11, 7, 4, 6, 5];
$element = 6;
$occurrences = countOccurrences($array, $element);
echo "The number of occurrences of the element $element in the array is: " . $occurrences;
?>
<!-- 19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. -->
<?php
function sortArray1($arr)
{
    rsort($arr); 
    return $arr;  
}
$array = [3,6,11,4,21,7,10];
$sortedArray = sortArray1($array);  
print_r($sortedArray);
?>
<!-- 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng. -->
<?php
function addElement($arr, $element, $position)
{
    if ($position === 'beginning') {  
        array_unshift($arr, $element);
    } elseif ($position === 'end') {
        $arr[] = $element; 
    }
    return $arr;
}
$array = [ 1, 2, 3, 4];
$element = 9;
$position = 'end';
$resultArray = addElement($array, $element, $position);
print_r($resultArray);
?>

<!--21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. -->
<?php
function findSecond($arr)
{
    $count = count($arr);    
    if ($count < 2) {     
        return "There is no second largest number in the array.";
    }
    rsort($arr); 
    return $arr[1]; 
}
$array = [7,12,20,3,6];
$secondLargest = findSecond($array);
echo "The second largest number in the array is: " . $secondLargest;
?>

<!-- 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương. -->
<?php
function findNumber($a, $b)
{
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function findMultiples($a, $b)
{
    $gcd = findNumber($a, $b);
    $lcm = ($a * $b) / $gcd;
    return $lcm;
}
$num1 = 6;  
$num2 = 10;  
$gcd = findNumber($num1, $num2);  
$lcm = findMultiples($num1, $num2);  
echo "Greatest common divisor of $num1 and $num2 are: " . $gcd . "<br>";
echo "Least common multiple of $num1 and $num2 are: " . $lcm;
?>

<!-- 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. -->
<?php
function perfectNumber($number)
{
    if ($number <= 0) { 
        return false;
    }
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
$number = 16;
if (perfectNumber($number)) {
    echo "$number is the perfect number.";
} else {
    echo "$number not a perfect number.";
}
?>

<!-- 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng. -->
<?php
function findLargestOddNumber($arr)
{
    $largestOddNumber = null; 
    foreach ($arr as $number) {
        if ($number % 2 != 0 && ($largestOddNumber === null || $number > $largestOddNumber)) {
            $largestOddNumber = $number;
        }
    }  
    return $largestOddNumber; 
}
$array = [3,7,13,20,8,2,1,22,19];
$largestOdd = findLargestOddNumber($array);
if ($largestOdd !== null) {
    echo "The largest odd number in the array is: " . $largestOdd;
} else {
    echo "There are no odd numbers in the array.";
}
?>

<!-- 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không. -->
<?php
function checkPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$number = 30;
if (checkPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>

<!-- 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng. -->
<?php
function findLargestPositiveNumber($arr)
{
    $largestPositiveNumber = null;  
    foreach ($arr as $number) {
        if ($number > 0 && ($largestPositiveNumber === null || $number > $largestPositiveNumber)) {
            $largestPositiveNumber = $number;
        }
    }
    return $largestPositiveNumber;
}
$array = [-6,3,9,-10,2];
$largestPositive = findLargestPositiveNumber($array);
if ($largestPositive !== null) {
    echo "The largest positive number in the array is: " . $largestPositive;
} else {
    echo "There are no positive numbers in the array.";
}
?>

<!-- 27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng. -->
<?php
function findLargestNegativeNumber($arr)
{
    $largestNegativeNumber = null; 
    foreach ($arr as $number) {
        if ($number < 0 && ($largestNegativeNumber === null || $number > $largestNegativeNumber)) {
            $largestNegativeNumber = $number;
        }
    }
    return $largestNegativeNumber;
}
$array =  [-6,6,10,9,-5];
$largestNegative = findLargestNegativeNumber($array);
if ($largestNegative !== null) {
    echo "The largest negative number in the array is: " . $largestNegative;
} else {
    echo "There are no negative numbers in the array.";
}
?>

<!-- 28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n. -->
<?php
function oddTotals($n)
{
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
    return $sum;
}
$n = 70;
$sum = oddTotals($n);
echo "Sum of odd numbers from 1 to $n is: " . $sum;
?>

<!-- 29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước. -->
<?php
function findPerfectSquares($start, $end)
{
    $perfectSquares = [];
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == (int)sqrt($i)) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}
$start = 1;
$end = 62;
$perfectSquares = findPerfectSquares($start, $end);
echo "The squares between $start and $end are: " . implode(', ', $perfectSquares);
?>

<!-- 30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không. -->
<?php
function CheckString($string, $substring)
{
    $position = strpos($string, $substring); 
    if ($position !== false) {
        return true;
    } else {
        return false;
    }
}
$mainString = "Hi, hello";
$subString = "hello";
$CheckString = CheckString($mainString, $subString);


if ($CheckString) {
    echo "string '$subString' is a substring of string '$mainString'.";
} else {
    echo "string '$subString' is not a substring of string '$mainString'.";
}
?>