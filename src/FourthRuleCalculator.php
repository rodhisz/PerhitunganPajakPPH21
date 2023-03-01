<?php

namespace StudiKasus\PPH21;
use StudiKasus\PPH21\AbstractCalculator;

class FourthRuleCalculator extends AbstractCalculator
{
    public function MaxPKP() : float
    {
        return 1000000000000000;
    }

    public function MinPKP() : float
    {
        return 500000000;
    }

    public function PersenPajak(): float
    {
        return 0.3;
    }
}