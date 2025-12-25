<?php
require_once 'classes/Tigger.php';

$tigger1 = Tigger::getInstance();
echo "- First variable Tigger 1st, roars 2 times:\n";
$tigger1->roar();
$tigger1->roar();
echo "\nRoar counter Tigger 1st: " . $tigger1->getCounter() . "\n\n";

$tigger2 = Tigger::getInstance();
echo "- Second variable Tigger 2nd, roars 3 times:\n";
$tigger2->roar();
$tigger2->roar();
$tigger2->roar();
echo "\nRoar counter Tigger 2nd: " . $tigger2->getCounter() . "\n\n";

$tigger3 = Tigger::getInstance();
echo "- Third variable Tigger 3rd, roars 1 time:\n";
$tigger3->roar();
echo "\nRoar counter Tigger 3rd: " . $tigger3->getCounter() . "\n\n";

if ($tigger1 === $tigger2 && $tigger2 === $tigger3) {
    echo "SAME VARIABLES: All 3 point to Tigger. There is only ONE.\n";
} else {
    echo "ERROR: There are different Tiggers.\n";
}

?>

