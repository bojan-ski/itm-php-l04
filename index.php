<?php

// TASK 1
$name = (string) 'administrator';
$password = (string) 'mojaSifraJeSigurna';

if ((string) strtolower($name) == 'administrator' && (string) $password == 'mojaSifraJeSigurna') echo('Dobrodosao admin user');

// line break - for easy visibility
echo ('<br>');

// TASK 2
$currentHourTime = (int) date('h');

if((int) $currentHourTime >= 5 && (int) $currentHourTime <= 12){
    echo('Morning');
}else if((int) $currentHourTime > 12 && (int) $currentHourTime <= 20){
    echo('Noon');
}else{
    echo('Evening');
}