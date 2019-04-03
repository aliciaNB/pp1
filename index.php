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

$numbers = array(7, 9, 8, 9, 8, 8, 6);

function printArr($myArray) {
    foreach ($myArray as $item) {
        echo '<p>' . $item . '</p>';
    }
}

printArr($numbers);
?>