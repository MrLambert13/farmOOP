<?php

require_once 'Animal.php';

/**
 * Class farm, store all products and animals
 * @property array $animals Array of animals in the farm
 * @property array $product Array of product
 */
class Farm
{
  private $animals = [];
  private $product = [];

  /**
   * Initialization farm, add animals, get products and show summ of products
   */
  public function __construct()
  {

    /*

    $this->harvest();
    $this->getProducts(); */ }

  /**
   * Add animals in the farm
   */
  public function addAnimals(Animal $animal, int $count)
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
        var_dump($animal);

        $prodName = $animal->getProductName();
        $product = $animal->getProductivity();
        $this->product[$prodName] = array_key_exists($prodName, $this->product)
          ? $this->product[$prodName] += $product
          : $this->product[$prodName] = $product;
        echo $product;
      }
    }
    var_dump($this->product);

    /*
    foreach ($this->cows as $cow) {
      $this->milk += $cow->getProductivity();
    }
    foreach ($this->chickens as $chicken) {
      $this->eggs += $chicken->getProductivity();
    } */
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
