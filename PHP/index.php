<?php
require_once('Car.php');
require_once('UberX.php');
require_once('UberPool.php');
require_once('Account.php');

$UberX = new UberX("AW456", new Account("Andres Herrera", "AMS123"), "Chevrolet", "Spark");
$UberX->PrintDataCar();

$UberPool = new UberPool("YTR654", new Account("Andrea Ferran", "MNB123"), "Dodge", "Attitude");
$UberPool->PrintDataCar();