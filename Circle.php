<?php


class Circle
{
   private $name;
   private $radius;
   public function __construct($name,$radius)
   {
      $this->name = $name;
      $this->radius = $radius;
   }

   /**
    * @param mixed $radius
    */
   public function setRadius($radius)
   {
      $this->radius = $radius;
   }

   /**
    * @param mixed $name
    */
   public function setName($name)
   {
      $this->name = $name;
   }

   /**
    * @return mixed
    */
   public function getRadius()
   {
      return $this->radius;
   }

   /**
    * @return mixed
    */
   public function getName()
   {
      return $this->name;
   }


}