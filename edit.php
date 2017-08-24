<?php
$mysqli = new mysqli(
    "localhost:8889",
    "root",
    "root",
    "training"
);


$list = array();

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = <<<SQL
    SELECT
      id,
      name,
      description
    FROM fruit
    WHERE id = '$id'
SQL;

    if ($result = $mysqli->query($sql)) {
        while ($item = $result->fetch_assoc()) {
            $list[] = $item;
        }
    }
}
echo json_encode($list);
