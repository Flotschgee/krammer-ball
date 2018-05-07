<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 02.05.2018
 * Time: 11:55
 */

namespace krammer\ball;

require_once("ballinterface.php");
require_once("basketball.php");
require_once("volleyball.php");
require_once("flummi.php");

  abstract class ball{
        protected $name;
        protected $durchmesser;
        protected $material;

        public function __construct(String $name, int $durchmessser, String $material){
            $this->name = $name;
            $this->durchmesser = $durchmessser;
            $this->material = $material;

        }

        /**
         * @return mixed
         */
        public function getName() : string
        {
            return $this->name;
        }

        /**
         * @return mixed
         */
        public function getDurchmesser() : float
        {
            return $this->durchmesser;
        }

        /**
         * @return mixed
         */
        public function getMaterial() : string
        {
            return $this->material;
        }


        public function getVolumen() : float {
            return 3/4*pi()*($this->durchmesser/2)^3;
        }


      public function __toString()
      {
          return $this->getName() . ", " . $this->getDurchmesser() . " cm, " . $this->getMaterial() . ", " .  $this->getVolumen();
      }


    }




