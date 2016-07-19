<?php

function calculate()
{

}

assert (4 == calculate(2, 2, '+'));
assert(0 == calculate(8, 8, '-'));
assert(6 == calculate(2, 3, '*'));
assert(4 == calculate(8, 2, '/'));

?>