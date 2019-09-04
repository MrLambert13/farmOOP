<?php


include_once 'core/Cow.php';
include_once 'core/Chicken.php';

class Farm
{
  private $cows = [];
  private $chickens = [];
  private $milk = 0;
  private $eggs = 0;
  private $products = 0;

  function __construct()
  {
    echo "Add animals to farm...";
    for ($i = 0; $i < 10; $i++) {
      array_push($this->cows, new Cow);
    }

    for ($i = 0; $i < 20; $i++) {
      array_push($this->chickens, new Chicken);
    }
    echo "Done\n";

    $this->harvest();
    $this->getProducts();
  }

  public function getProducts()
  {
    echo "Summ of products: milk {$this->milk} l., eggs {$this->eggs} pts.\n";
  }

  public function harvest()
  {
    echo "Get products from animals...";
    foreach ($this->cows as $cow) {
      $this->milk += $cow->getProductivity();
    }
    foreach ($this->chickens as $chicken) {
      $this->eggs += $chicken->getProductivity();
    }
    echo "Done\n";
  }

  public function addCow()
  {
    array_push($this->cows, new Cow);
    echo "Add cow complete \n";
  }

  public function addChicken()
  {
    array_push($this->chickens, new Cow);
    echo "Add chicken complete \n";
  }
}

$myFarm = new Farm;

do {
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
} while ($input !== '5');
