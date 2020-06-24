<?php
$connect = mysqli_connect("localhost", "fitimadili", "123123", "databaza");
$filename="test.json";
$data=file_get_contents($filename);
$array=json_decode($data, true);
foreach($array as $row){
    $sql="INSERT INTO sales(sale_id, customer_name, customer_mail, product_id, product_price, sale_date) 
	VALUES ('".$row["sale_id"]."', '".$row["customer_name"]."', '".$row["customer_mail"]."', '".$row["product_id"]."', '".$row["product_price"]."', '".$row["sale_date"]."')";
}

error_reporting(E_ALL);

?>