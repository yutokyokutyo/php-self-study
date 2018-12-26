<?php
function getTriangleArea(float $base = 5, float $height = 1): float {
    return $base * $height /2;
}

$area = getTriangleArea();
print "三角形の面積は {$area} です！！";
$area = getTriangleArea(10);
print "三角形の面積は {$area} です！！";
$area = getTriangleArea(40, 100);
print "三角形の面積は {$area} です！！";
