<?php

require_once("Truck.php");

$truck = new Truck(120, 'green', 4, 'fuel');

echo $truck->forward() . PHP_EOL;
echo $truck->brake()  . PHP_EOL;
echo "le chargement est : " . $truck->getLoad() .  " et donc " .  $truck->isFill() . PHP_EOL;
$truck->setLoad(50);
echo "le chargement est : " . $truck->getLoad() .  " et donc " .  $truck->isFill() . PHP_EOL;
$truck->setLoad(25);
echo "le chargement est : " . $truck->getLoad() .  " et donc " .  $truck->isFill() . PHP_EOL;
$truck->setLoad(45);
echo "le chargement est : " . $truck->getLoad() .  " et donc " .  $truck->isFill() . PHP_EOL;
