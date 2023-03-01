<?php

use StudiKasus\PPH21\FirstRuleCalculator;
use StudiKasus\PPH21\FourthRuleCalculator;
use StudiKasus\PPH21\PPH21Calculator;
use StudiKasus\PPH21\SecondRuleCalculator;
use StudiKasus\PPH21\ThirdRuleCalculator;

require __DIR__.'/src/CalculatorAbstract.php';
require __DIR__.'/src/CalculatorInterface.php';
require __DIR__.'/src/FirstRuleCalculator.php';
require __DIR__.'/src/SecondRuleCalculator.php';
require __DIR__.'/src/ThirdRuleCalculator.php';
require __DIR__.'/src/FourthRuleCalculator.php';
require __DIR__.'/src/PPH21Calculator.php.php';

$first = new FirstRuleCalculator();
$second = new SecondRuleCalculator($first);
$third = new ThirdRuleCalculator($second);
$fourth = new FourthRuleCalculator($third);

$calculator = new PPH21Calculator($first, $second, $third, $fourth);

echo $calculator->calculate(80000000);