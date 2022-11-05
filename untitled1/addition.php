<?php
$id = "нема";
$name = "нема";
$teacher = "нема";
$mark = "нема";
if(isset($_GET["id"])){

    $id = $_GET["id"];
}
if(isset($_GET["name"])){

    $name = $_GET["name"];
}
if(isset($_GET["teacher"])){

    $teacher = $_GET["teacher"];
}
if(isset($_GET["mark"])){

    $mark = $_GET["mark"];
}

echo "Id: $id <br> Titule: $name <br> Teacher: $teacher <br> Mark: $mark";
?>