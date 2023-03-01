<?php

namespace StudiKasus\PPH21;

interface CalculatorInterface{
    public function Calculate(float $pkp) : float;
    public function MaxPKP() : float;
    public function MinPKP() : float;
    public function PersenPajak() : float;
}