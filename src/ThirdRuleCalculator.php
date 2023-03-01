<?php

namespace StudiKasus\PPH21;
use StudiKasus\PPH21\AbstractCalculator;

class ThirdRuleCalculator extends AbstractCalculator
{
    public function MaxPKP() : float
    {
        return 500000000;
    }

    public function MinPKP() : float
    {
        return 250000000;
    }

    public function PersenPajak(): float
    {
        return 0.25;
    }
}