<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 07.05.2018
 * Time: 11:21
 */

namespace krammer\ball;


class basketball extends ball implements ballinterface
{

        function __construct(String $name, int $durchmessser, String $material){
            parent:: __construct($name, $durchmessser, $material);

    }

    public function getVolumen(): float
    {
        // TODO: Implement getVolumen() method.
        return 3/4*pi()*($this->durchmesser/2)^3;
    }
}