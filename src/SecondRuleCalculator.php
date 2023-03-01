<?php

namespace StudiKasus\PPH21;
use StudiKasus\PPH21\AbstractCalculator;

class SecondRuleCalculator extends AbstractCalculator
{
    public function MaxPKP() : float
    {
        return 250000000;
    }

    public function MinPKP() : float
    {
        return 50000000;
    }

    public function PersenPajak(): float
    {
        return 0.15;
    }
}