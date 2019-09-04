<?php


include_once 'core/Cow.php';
include_once 'core/Chicken.php';

/**
 * Class farm, store all products and animals
 * @property array $cows Array of cows in the farm
 * @property array $chickens Array of chickens in the farm
 * @property integer $milk Count of milk in the farm
 * @property integer $eggs Count of eggs in the farm
 */
class Farm
{
  private $cows = [];
  private $chickens = [];
  private $milk = 0;
  private $eggs = 0;

  /**
   * Initialization farm, add animals, get products and show summ of products
   */
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

  /**
   * Get products from all animals
   */
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

  /**
   * Show summ of products in the farm
   */
  public function getProducts()
  {
    echo "Summ of products: milk {$this->milk} l., eggs {$this->eggs} pts.\n";
  }

  /**
   * Add a cow in the farm
   */
  public function addCow()
  {
    array_push($this->cows, new Cow);
    echo "Add cow complete \n";
  }

  /**
   * Add a chicken in the farm
   */
  public function addChicken()
  {
    array_push($this->chickens, new Chicken);
    echo "Add chicken complete \n";
  }
}

$myFarm = new Farm; //create the farm

//Navigation menu
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
