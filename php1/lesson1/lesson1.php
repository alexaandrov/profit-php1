<?php

// Functions
function decideTask($a, $b, $c)
{
    echo $a . 'x^2 ' . getMark($b) . ' ' . $b . 'x ' . getMark($c) . ' ' . $c . ' = 0' . "\n\n";

    $discr = discr($a, $b, $c);
    $discrSqrt = sqrt($discr);

    if ($discr < 0) {
        echo "Korney net";
        return 0;
    }

    $x1 = (-$b + $discrSqrt) / 2;

    if ($discr > 0) {
        $x2 = (-$b - $discrSqrt) / 2;
        echo 'x1 = ' . $x1 . "\n" . 'x2 = ' . $x2;
    } elseif ($discr == 0) {
        echo 'x = ' . $x1 . "\n";
    }
}

function getMark($num)
{
    if ($num % 2 >= 0) {
        return '+';
    }
}

function discr($a = 1, $b, $c)
{
    if ($b * $b != 0) {
        return ($b * $b) - (4 * $a * $c);
    } else {
        return 0;
    }
}

// Tests
assert(discr(1, 2, -3) == 16);
assert((-2 + sqrt(discr(1, 2, -3))) / 2 == 1);

// Run
decideTask(1, 2, -3);
?>