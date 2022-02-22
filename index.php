<?php

/** require composer autoload logic **/
require 'vendor/autoload.php';

/** namespaces */
use Carbon\Carbon;
use Faker\Factory as Faker;


// declaration of variables
$faker = Faker::create();

// Library::sayHello('Thibaut\'s moeder');



$howOldAmI = Carbon::createFromDate(1990, 12, 21)->age;

// echo 'Het is nu ' . $time . PHP_EOL;
echo 'Jouw docent is vandaag ' . $howOldAmI . PHP_EOL;
echo 'Jouw docent heet vandaag ' . $faker->name('m') . PHP_EOL;