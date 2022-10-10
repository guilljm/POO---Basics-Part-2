<?php

include("car.php");
include("bike.php");

$car = new Car('bleu', 5, 'l\'Essence');
$bike = new Bicycle('rouge');

echo $car->start(15) .  '<br>';

echo 'La voiture de couleur : ' . $car->getColor() . ' ayant ' . $car->getNbSeats() . ' sièges ';
echo 'ayant comme energie de ' . $car->getEnergy() . ' roule à ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo $car->forward() . '<br>';
echo $car->forward() . '<br>';
echo 'Elle avance à ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';

echo '<br><br>';
echo $bike->SetCurrentSpeed(7);
echo $bike->forward();
echo '<br>';

echo 'Le velo de couleur ' . $bike->getColor() . ' ayant ' . $bike->nbWheels . ' roues ';
echo 'avancent à ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
