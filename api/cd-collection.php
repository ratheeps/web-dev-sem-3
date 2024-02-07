<?php

class Class1 extends Samthing implements
    Interface1,
    Interface2,
    Interface3,
    Interface4
{

    public $apple = "1";
    public $orange = "1";

    final public  $a = 1;

    public static $a = 2

    /**
     * Sum three values
     * 
     * @param $num2
     * @param $num3
     * @param $num1
     * @return void
     */
    function sum(
        $num2,
        $num3 = 2,
        $num1 = 1
    ) {
    }

    sum(
        1,
        2,
        3
    );

    if (true) {
        $a = 10;
        $b = 10;
    }
}
