<?php
$a=1;
$b=2;
$a = $a ^ $b;
$b = $b ^ $a;
$a = $a ^ $b;

echo "$a\n";
echo $b;

