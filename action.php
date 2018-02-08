<?php

function updateTableWithLatLngByID ($id, $lat, $lng) {
    // Opens a connection to a MySQL server
    $dsn = 'mysql:host=localhost;dbname=pikin';
    $pdo = new PDO($dsn, 'root', '');

    $sql = $pdo->prepare('UPDATE educators SET lat = :lat, lng = :lng WHERE EducatorID = :id');
    $sql->bindParam(':id' , $id);
    $sql->bindParam(':lat' , $lat);
    $sql->bindParam(':lng' , $lng);
    if ($sql->execute()) {
      return true;
    }else {
      return false;
    }
}

$id = $_REQUEST['id'];
$lat = $_REQUEST['lat'];
$lng = $_REQUEST['lng'];

$status = updateTableWithLatLngByID($id, $lat, $lng);

if ($status) {
  echo "Updated";
}else {
    echo "Failed";
}



 ?>
