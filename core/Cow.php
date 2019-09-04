<?php

require_once 'FarmAnimal.php';

/**
 * Class for cow, can make from 8 to 12 l milk
 */
class Cow extends FarmAnimal
{
  public function __construct()
  {
    parent::__construct();
    $this->setProductivity();
  }

  /**
   * Set productivity in 8 to 12
   */
  protected function setProductivity()
  {
    $this->productivity = random_int(8, 12);
  }
}
