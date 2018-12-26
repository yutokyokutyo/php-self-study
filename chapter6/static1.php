<?php
$x = 0;

function checkStatic(): int {
    static $x = 0;
    return ++$x;
}

print checkStatic();
print checkStatic();
print $x;
