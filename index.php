<!doctype html>
<html lan="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>
</body>
</html>

<?php

include("functions.php");

$numbers = array(7, 9, 8, 9, 8, 8, 6);

printArr($numbers);
$largestResult = largest($numbers);

echo "<p> The largest value found in the array was " . $largestResult . "</p>";

$getAverage = average($numbers);

echo "<p> The average value found in the array was " . $getAverage . "</p>";

$removeDupsResult = removeDups($numbers);

echo "<p> This array has had duplicates removed from it: ";
$format = implode(", ", $removeDupsResult);
echo "[" . $format . "]</p>";

$distributionResult = distribution($numbers);
echo "<p> Given an array of values an associative array was created and sorted: [";
//print_r($distributionResult);

foreach($distributionResult as $v => $value) {
    echo $v . " => " . $value . ", ";
}
echo "]</p>";

?>