<?php
require_once('Car.php');
require_once('UberX.php');
require_once('UberPool.php');
require_once('UberVan.php');
require_once('Account.php');

$uberX = new UberX("AW456", new Account("Andres Herrera", "AMS123"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->PrintDataCar();

// $UberPool = new UberPool("YTR654", new Account("Andrea Ferran", "MNB123"), "Dodge", "Attitude");
// $UberPool->PrintDataCar();

$uberVan = new UberVan("OJL395", new Account("Raúl Ramírez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();