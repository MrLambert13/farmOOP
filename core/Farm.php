<?php

require_once 'Animal.php';

/**
 * Class farm, store all products and animals
 * @property array $animals Array of animals in the farm
 * @property array $products Array of products
 */
class Farm
{
  private $animals = [];
  private $products = [];

  /**
   * Add animals in the farm
   *
   * @param Animal $animal Type of animals which add in farm, must release Animal interface
   * @param int $count How much animals will add, if null add an animal
   */
  public function addAnimals(Animal $animal, int $count = 1)
  {
    echo "Add animals to farm...";

    $arrOfAnimals = [];
    for ($i = 0; $i < $count; $i++) {
      array_push($arrOfAnimals, new $animal);
    }
    //Add animals in main array
    $this->animals[get_class($animal)] = array_key_exists(get_class($animal), $this->animals)
      ? array_merge($this->animals[get_class($animal)], $arrOfAnimals)
      : $arrOfAnimals;

    echo "Done \n";
  }

  /**
   * Get products from all animals
   */
  public function harvest()
  {
    echo "Get products from animals...";

    foreach ($this->animals as $animals) {
      foreach ($animals as $animal) {
        $prodName = $animal->getProductName();
        $productCount = $animal->getProductivity();
        //Add products in main array
        $this->products[$prodName] = array_key_exists($prodName, $this->products)
          ? $this->products[$prodName] += $productCount
          : $this->products[$prodName] = $productCount;
      }
    }

    echo "Done\n";
  }

  /**
   * Show summ of products in the farm
   */
  public function getProducts()
  {
    $result = 'In farm: ';

    foreach ($this->products as $product => $count) {
      $result .= $product === array_key_last($this->products)
        ? "{$count} {$product}.\n"
        : "{$count} {$product},";
    }
    echo $result;
  }
}
