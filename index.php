<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .cont{
            width:1100px;
            height:90vh;
            background-color:#e8e8e8;
            margin:auto;
            margin-top: 20px;
            padding:20px;
            display:flex;
            flex-wrap: wrap;
        
        }
        .card{
            width:30%;
            background-color:#fff;
            border-radius:10px;
            height:300px;
            padding:10px;
            margin:5px
          
            
            

        }
        .card-head{
            font-size:20px;
        }
        h2{
            text-align:center;
            font-size:18px;
            font-family: serif;
            font-style: italic;
        }
       
    </style>
</head>
<body>

<div class="cont">

<div class="card">
    <h2>Question One </h2>
    <div class="card-head">

    <?php
    
    function calculateLCM($num1, $num2)
{
    $gcd = calculateGCD($num1, $num2);
    $lcm = ($num1 * $num2) / $gcd;
    return $lcm;
}

function calculateGCD($a, $b)
{
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

// Example usage
$num1 = 12;
$num2 = 18;
$lcm = calculateLCM($num1, $num2);
echo "LCM of $num1 and $num2 is: <b> $lcm </b>";
?>

    </div>
</div>
<div class="card">
    <h2>Question Two </h2>
    <div class="card-head">
<?php
function calculateHCF($num1, $num2)
{
    while ($num2 != 0) {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }
    return $num1;
}

// Example usage
$num1 = 12;
$num2 = 18;
$hcf = calculateHCF($num1, $num2);
echo "HCF of $num1 and $num2 is: <b>$hcf </b>";
?>
    </div>
</div>
<div class="card">
    <h2>Question Three </h2>
    <div class="card-head">
<?php
function printNonPrimeNumbers($initial = 2, $final = 100)
{
    echo "Non-prime numbers between $initial and $final are: ";

    for ($num = $initial; $num <= $final; $num++) {
        if (!isPrime($num)) {
            echo $num . " ";
        }
    }
}

function isPrime($number)
{
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

// Example usage
printNonPrimeNumbers(2, 100);
?>
    </div>
</div>
<div class="card">
    <h2>Question Four </h2>
    <div class="card-head">
<?php

function decimalToRadix($decimal, $radix = 2)
{
    $digits = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    if ($decimal == 0) {
        return '0';
    }

    $result = '';

    while ($decimal > 0) {
        $remainder = $decimal % $radix;
        $result = $digits[$remainder] . $result;
        $decimal = (int)($decimal / $radix);
    }

    return $result;
}

// Example usage
$decimal = 42; // Decimal number to convert
$radix = 16; // Radix (base) to convert to

$convertedNumber = decimalToRadix($decimal, $radix);
echo "The decimal number $decimal in base $radix is: $convertedNumber";
?>
    </div>
</div>
<div class="card">
    <h2>Question Five</h2>
    <div class="card-head">
<?php
function processArray($arr)
{
    $total = 0;
    $totalOdd = 0;
    $totalEven = 0;

    echo "Array elements: ";
    foreach ($arr as $element) {
        echo $element . " ";
        $total += $element;
        if ($element % 2 == 0) {
            $totalEven += $element;
        } else {
            $totalOdd += $element;
        }
    }

    echo "\n";
    echo "Total of odd elements: $totalOdd\n";
    echo "Total of even elements: $totalEven\n";
    echo "Total of all elements: $total\n";
}

// Example usage
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
processArray($array);
?>
    </div>
</div>
 </div>
    

</body>
</html>

<?php

 
           

 
 






?>