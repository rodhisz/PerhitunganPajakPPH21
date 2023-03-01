<?php

namespace StudiKasus\PPH21;
use StudiKasus\PPH21\CalculatorInterface;

final class PPH21Calculator
{
    private $calculators;

    public function __construct(CalculatorInterface ...$calculators)
    {
        $this->calculators = $calculators;
    }

    public function calculate(float $pkp) : float
    {
        foreach ($this->calculators as $c)
        {
            if ($pkp < $c->MaxPKP() && $pkp >= $c->MinPKP())
            {
                return $c -> calculate($pkp);
            }
        }
    }
}