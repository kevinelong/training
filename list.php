<?php
$mysqli = new mysqli(
    "localhost:8889",
    "root",
    "root",
    "training"
);

$list = array();

//$sql = <<<SQL
//  SELECT
//    `fruit`.`id`,
//    `fruit`.`name`,
//    `fruit`.`description`
//  FROM `training`.`fruit`
//SQL;

$sql = <<<SQL
  SELECT 
    id, 
    name, 
    description
  FROM fruit
SQL;


if ($result = $mysqli->query($sql)) {
    while ($item = $result->fetch_assoc()) {
        $list[] = $item;
    }
}

echo json_encode($list, JSON_PRETTY_PRINT);
