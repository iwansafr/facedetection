<?php
include "koneksi.php";
$query = $con->prepare("SELECT * FROM user");
$query->execute();
echo json_encode($query->fetchAll());
