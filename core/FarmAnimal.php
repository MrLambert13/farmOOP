<?php

namespace core;

use core\Animal;

/**
 * Class of any animal in farm
 * @property integer $counter This is counter of all animals in the farm
 * @property integer $uid This is unique ID of animal
 * @property integer $productivity How much product can give an animal
 */
abstract class FarmAnimal implements Animal
{
  private static $counter = 0;
  private $uid;
  protected $productivity;
  protected static $productName;

  /**
   * set random productivity for an animal
   */
  abstract protected function setProductivity();

  /**
   * Increase counter and set it for uid of an animal
   */
  public function __construct()
  {
    self::$counter++;
    $this->uid = self::$counter;
  }

  /**
   * Get product from an animal
   */
  public function getProductivity()
  {
    return $this->productivity;
  }

  /**
   * Get product name
   */
  public function getProductName()
  {
    return static::$productName;
  }
}
