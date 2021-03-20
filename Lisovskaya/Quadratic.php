<?php

namespace Lisovskaya;

use \core\EquationInterface as EI;


class Quadratic extends Line implements EI
{
    public function discriminant($a, $b, $c)
    {
        return ($b * $b) - 4 * $a * $c;
    }

    public function Kvadrat($a, $b, $c)
    {
        If ($a === 0)
        {
            return parent::line_equation($b, $c);
        }
        $d = $this->discriminant($a, $b, $c);
        if ($d > 0)
        {
            $eg = sqrt($d);
            return $this->x = array((-$b - $eg) / (2 * $a), (-$b + $eg) / (2 * $a));
        }
        if ($d === 0)
        {
            return $this->x = array(-$b / (2 * $a));
        }
        return null;
    }
}
