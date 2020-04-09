<?php

namespace App;

class Calc
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function minus($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function division($a, $b)
    {
        if ($b == 0)
            return 0;
        return $a / $b;
    }
}