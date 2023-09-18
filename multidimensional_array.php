<?php 


$car = array ("Audi" => 23.43, "Mercedes" => 23.00, "Chevyl" => 54.43);


foreach ($car as $key => $value) {
    echo "My ". $key . " has a ". $value. " milage". "<br>";
}

$cars = array(
    "Expensive" => array("Audi", "Mercedes", "BMW"), 
    "Inexpensive" => array("Toyota", "Ford", "Volvo")
);


echo $cars["Expensive"][2];


?>