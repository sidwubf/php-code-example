<?php
//$a = 1;
//xdebug_debug_zval('a');

function c($s) {

}

function a($s) {
    c($s);
}

function b(&$s) {
    c($s);
}

$s = str_repeat('a', 1024 * 1024);

$stime1 = microtime(true);
a($s);
echo microtime(true) - $stime1;
echo "<br/>";
$stime2 = microtime(true);
b($s);
echo microtime(true) - $stime2;
echo "<br/>";
$stime3 = microtime(true);
for ($i = 0; $i < 10000; $i++) {
    a($s);
}
echo microtime(true) - $stime3;
echo "<br/>";
$stime4 = microtime(true);
for ($i = 0; $i < 10000; $i++) {
    b($s);
}
echo microtime(true) - $stime4;

/*
eg.
5.3167343139648E-5
0.00034284591674805
0.24302887916565
2.3030178546906
*/
