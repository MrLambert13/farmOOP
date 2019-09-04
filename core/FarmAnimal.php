<?php

/**
 * Class of any animal in farm
 * @property integer $id
 */
abstract class FarmAnimal
{
  private static $counter = 0;
  private $uid;
  protected $productivity;

  abstract protected function setProductivity();

  public function __construct()
  {
    self::$counter++;
    $this->uid = self::$counter;
  }

  public function getUID()
  {
    return $this->uid;
  }

  public function getProductivity()
  {
    return $this->productivity;
  }
}
