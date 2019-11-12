
<?php

require_once "Vehicle.php";
require_once "Bicycle.php";
require_once "Skateboard.php";
require_once "Car.php";
require_once "Truck.php";

require_once "HighWay.php";
require_once "MotorWay.php";
require_once "ResidentialWay.php";
require_once "PedestrianWay.php";

$car = new Car('green', 4, 'electric');
//echo $car->forward();

$truck = new Truck('blue', 3, 'fuel', 50, 30);
$truck2 = new Truck('green', 2, 'electric', 25, 10);

$tesla = new Car('black', 4, 'electric');
$ferrari = new Car('red', 2);
$skate = new Skateboard('brown', 1);
$bike = new Bicycle('brown', 2, "oui");

echo "<br>";
echo "___________________";
echo "<br>";

$roadCar = new MotorWay();
$roadTruck = new MotorWay();
$roadSkate = new MotorWay();

$roadCar->addVehicle($ferrari);
$roadTruck->addVehicle($truck);
$roadSkate->addVehicle($skate);

//var_dump($roadCar);
//var_dump($roadTruck);
//var_dump($skate);

echo "<br>";

echo "________tesla__________";
var_dump($tesla);
echo $tesla->switchOff(); // return false

echo "________bike__________";
$bike->setCurrentSpeed(12);
var_dump($bike);
echo $bike->switchOn(); // return true


