<?php

require_once 'FarmAnimal.php';

class Cow extends FarmAnimal
{
  public function __construct()
  {
    parent::__construct();
    $this->setProductivity();
  }

  protected function setProductivity()
  {
    $this->productivity = random_int(8, 12);
  }
}
