<?php

require_once 'classes/Wallet.php';
require_once 'classes/HouseKeys.php';
require_once 'classes/CarKeys.php';
require_once 'classes/MotorcycleKeys.php';
require_once 'classes/TransportCard.php';
require_once 'classes/Smartphone.php';
require_once 'classes/Work.php';
require_once 'classes/School.php';
require_once 'classes/Person.php';

echo "1) Go to work by car.\n";
$wallet = new Wallet();
$houseKeys = new HouseKeys();
$car = new CarKeys();
$smartphone = new Smartphone();
$work = new Work();

$personWorkCar = new Person($wallet, $houseKeys, $car, $smartphone, $work);
$personWorkCar->departureFromHome();

echo "2) Go to school by motorcycle.\n";
$wallet2 = new Wallet();
$houseKeys2 = new HouseKeys();
$moto = new MotorcycleKeys();
$smartphone2 = new Smartphone();
$school = new School();

$personSchoolMotorcycle = new Person($wallet2, $houseKeys2, $moto, $smartphone2, $school);
$personSchoolMotorcycle->departureFromHome();

echo "3) Go to work by bus.\n";
$wallet3 = new Wallet();
$houseKeys3 = new HouseKeys();
$transportCard = new TransportCard();
$smartphone3 = new Smartphone();
$work2 = new Work();

$personWorkBus = new Person($wallet3, $houseKeys3, $transportCard, $smartphone3, $work2);
$personWorkBus->departureFromHome();

echo "4) Go to school by bus.\n";
$wallet4 = new Wallet();
$houseKeys4 = new HouseKeys();
$transportCard2 = new TransportCard();
$smartphone4 = new Smartphone();
$school2 = new School();

$personSchoolBus = new Person($wallet4, $houseKeys4, $transportCard2, $smartphone4, $school2);
$personSchoolBus->departureFromHome();

?>

