<?php 


$names = array("Sanmi", "Temi", "Michael", "Lazy_Coder");

foreach ($names as $name) {
    echo "My name is ", $name, "<br>";
}

$person = array("Name" => "Angelo", "Age" => 25, "Gender" => "Male");

foreach ($person as $key => $value) {
    echo $key, " : ", $value, "<br>";
}

?>