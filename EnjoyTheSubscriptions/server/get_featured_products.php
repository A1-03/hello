<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM Products");
$stmt->execute();
$featured_products = $stmt->get_result();//[]

?>
