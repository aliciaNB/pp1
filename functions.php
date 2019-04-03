<?php


function printArr($myArray) {
    foreach ($myArray as $item) {
        echo '<p>' . $item . '</p>';
    }
}

function largest($myArray) {

    $largestValue = $myArray[0];

    foreach($myArray as $value) {
        if($value > $largestValue) {
            $largestValue = $value;
        }
    }

    return $largestValue;
}

function average($myArray) {

    $sum = 0;
    $count = 0;

    foreach ($myArray as $item) {
        $sum += $item;
        $count++;
    }

    return $sum / $count;
}