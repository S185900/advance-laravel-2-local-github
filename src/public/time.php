<?php
// $date = new DateTime();
// echo $date->format('Y-m-d H:i:s');

// $date = new DateTime('1999-11-02 05:27:42');
// echo $date->format('Y-m-d H:i:s');

// $date = new DateTime();
// echo $date->format('Y');


// $date = new DateTime();
// echo $date->format('m');


// $date = new DateTime();
// echo $date->format('d');


// $date = new DateTime();
// echo $date->format('D');

// $date = new DateTime();
// echo $date->format('H');

// $date = new DateTime();
// echo $date->format('i');

// $date = new DateTime();
// echo $date->format('s');

// $date = new DateTime();
// echo $date->format(DateTime::ATOM);

// $date = new DateTime();
// echo $date->format(DateTime::COOKIE);

// $date = new DateTime();
// echo $date->format(DateTime::RSS);

// $date = new DateTime();
// echo $date->format(DateTime::W3C);


// $date = new DateTime();
// echo $date->modify('-1 years')->format('Y-m-d H:i:s');
// $date = new DateTime();
// echo $date->modify('1 years')->format('Y-m-d H:i:s');


// $date = new DateTime();
// echo $date->modify('-1 months')->format('Y-m-d H:i:s');
// $date = new DateTime();
// echo $date->modify('1 months')->format('Y-m-d H:i:s');

// $date = new DateTime();
// echo $date->modify('-1 days')->format('Y-m-d H:i:s');
// $date = new DateTime();
// echo $date->modify('1 days')->format('Y-m-d H:i:s');


// $date = new DateTime();
// echo $date->modify('-1 hours')->format('Y-m-d H:i:s');
// $date = new DateTime();
// echo $date->modify('1 hours')->format('Y-m-d H:i:s');


// $date = new DateTime();
// echo $date->modify('-1 minutes')->format('Y-m-d H:i:s');
// $date = new DateTime();
// echo $date->modify('1 minutes')->format('Y-m-d H:i:s');

$date = new DateTime();
echo $date->modify('-1 seconds')->format('Y-m-d H:i:s');
$date = new DateTime();
echo $date->modify('1 seconds')->format('Y-m-d H:i:s');

?>
