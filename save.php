<?php
$mysqli = new mysqli(
    "localhost:8889",
    "root",
    "root",
    "training"
);


$id = $_POST['id'];
$name = $mysqli->real_escape_string($_POST['name']);
$description = $mysqli->real_escape_string($_POST['description']);

if ($id != "") {

    $sql = <<<SQL
    UPDATE FRUIT SET 
      name = '$name',
      description = '$description'
    WHERE id = '$id'
SQL;

    $result = $mysqli->query($sql);

}else{
    //NEW

    $sql = <<<SQL
    INSERT INTO FRUIT (
      name, 
      description 
    ) VALUES (
      '$name',
      '$description'    
    )
SQL;

    $result = $mysqli->query($sql);

}

header("location: list.html");
