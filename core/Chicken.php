<?php

require_once 'FarmAnimal.php';

/**
 * Class for cow, can make from 0 to 1 eggs
 */
class Chicken extends FarmAnimal
{
  public function __construct()
  {
    parent::__construct();
    $this->setProductivity();
  }

  /**
   * Set productivity in 0 to 1
   */
  protected function setProductivity()
  {
    $this->productivity = random_int(0, 1);
  }
}
