<?php

include_once 'core/Cow.php';
include_once 'core/Chicken.php';
include_once 'core/Farm.php';



$myFarm = new Farm; //create the farm
$myFarm->addAnimals(new Cow, 1);
$myFarm->addAnimals(new Cow, 2);
$myFarm->addAnimals(new Chicken, 2);
$myFarm->harvest();


//Navigation menu
/* do {
  echo "Press: 1 - add cow, 2 - add chicken, 3 - get product, 4 - summ product, 5 - exit\n";

  $input = readline();

  switch ($input) {
    case '1':
      $myFarm->addCow();
      break;
    case '2':
      $myFarm->addChicken();
      break;
    case '3':
      $myFarm->harvest();
      break;
    case '4':
      $myFarm->getProducts();
      break;
  }
} while ($input !== '5'); */
