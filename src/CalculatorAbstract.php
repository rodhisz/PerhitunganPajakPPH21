<?php
namespace StudiKasus\PPH21;
use StudiKasus\PPH21\CalculatorInterface;

abstract class AbstractCalculator implements CalculatorInterface
{
    private $chain;

    public function __construct(?CalculatorInterface $chain = null)
    {
        $this->chain = $chain;
    }

    public function calculate(float $pkp): float
    {
        $previousValue = 0;

        if($previous = $this->chain){
            $previousValue = $this->chain->calculate($previous->MaxPKP());
            $pkp -= $previous->MaxPKP();
        }

        return ($this->PersenPajak() * $pkp) + $previousValue;
    }
}
?>