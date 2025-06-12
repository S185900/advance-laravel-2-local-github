<?php

require '../vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->year;

$dt = Carbon::now();
echo $dt->day;

$dt = Carbon::now();
echo $dt->hour;

$dt = Carbon::now();
echo $dt->minute;

$dt = Carbon::now();
echo $dt->second;

$dt = Carbon::now();
echo $dt->addYear();

$dt = Carbon::now();
echo $dt->subYear();

$dt = Carbon::now();
echo $dt->addMonth();

$dt = Carbon::now();
echo $dt->subMonth();

$dt = Carbon::now();
echo $dt->addDay();

$dt = Carbon::now();
echo $dt->subDay();

$dt = Carbon::now();
echo $dt->addHour();

$dt = Carbon::now();
echo $dt->subHour();

$dt = Carbon::now();
echo $dt->addMinute();

$dt = Carbon::now();
echo $dt->subMinute();

$dt = Carbon::now();
echo $dt->addSeconds();

$dt = Carbon::now();
echo $dt->subSeconds();













?>