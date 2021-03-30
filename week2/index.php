<?php


define('CONSTANT_NAME',1000);

echo 'constant name is '.CONSTANT_NAME;

echo '<br>';

echo 'PHP version is: '.PHP_VERSION;

echo '<br>';

// Global variable test

function test() {
    $foo = 'local PHP variable';

    echo '$foo in the local scope: '.$foo.'<br>';
    echo '$foo in the global '.$GLOBALS['foo'].'<br>';
}

$foo = 'global PHP variable';
test();


$grades = array('fail', 'pass', 'good', 3);

echo '<pre>';
print_r($grades);
echo '<pre>';

echo 'Grades value at index 0 is: '.$grades[0];
echo '<br>';
echo 'Grades value at index 3 is: '.$grades[3];




?>