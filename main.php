<?php

include 'vendor/autoload.php';

use core\{Cow, Chicken, Farm};



$myFarm = new Farm; //create the farm

// Initialization farm, add animals, get products and show summ of products
for ($i = 0; $i < 3; $i++) {
  $myFarm->addAnimals(new Cow);
}
for ($i = 0; $i < 10; $i++) {
  $myFarm->addAnimals(new Chicken);
}
$myFarm->harvest();
$myFarm->getProducts();

//Navigation menu
do {
  echo "Press: 1 - add cow, 2 - add chicken, 3 - get product, 4 - summ product, 5 - exit\n";

  $input = readline();

  switch ($input) {
    case '1':
      $myFarm->addAnimals(new Cow);
      break;
    case '2':
      $myFarm->addAnimals(new Chicken);
      break;
    case '3':
      $myFarm->harvest();
      break;
    case '4':
      $myFarm->getProducts();
      break;
    case '6':
      $myFarm->getAnimals();
      break;
  }
} while ($input !== '5');
