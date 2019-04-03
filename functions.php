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