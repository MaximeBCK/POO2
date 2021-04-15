<?php



require_once 'Bicycle.php';

$bycicle= new Bicycle('red',1);
echo $bycicle->forward();
var_dump($bycicle);


require_once 'Car.php';

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);


require_once 'camion.php';
$camion = new camion('green',3,0,'electric');
var_dump($camion);

echo $camion->fillLoad();
