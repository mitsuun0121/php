<?php
function getSquareArea($base, $height) {
    return $base * $height;
}
echo getSquareArea(5, 5) . "\n";

function getTriangleArea($base, $height) {
    return $base * $height / 2;
}
echo getTriangleArea(7, 8) . "\n";

function getTrapezoidArea($upperBase, $lowerBase, $height) {
    return ($upperBase + $lowerBase) * $height / 2;
}
echo getTrapezoidArea(4, 5, 4);