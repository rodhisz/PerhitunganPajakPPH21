<?php

namespace StudiKasus\PPH21;
use StudiKasus\PPH21\AbstractCalculator;

class FirstRuleCalculator extends AbstractCalculator
{
    public function MaxPKP() : float
    {
        return 50000000;
    }

    public function MinPKP() : float
    {
        return 0;
    }

    public function PersenPajak(): float
    {
        return 0.05;
    }
}