<?php

$link = mysqli_connect("localhost", "fitimadili", "123123", "databaza");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 echo "<h3>All DATA from DATABASE</h3>";
$sql = "SELECT * FROM sales ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table style='border-width:1px; border-style:solid; border-color:black;'>";
            echo "<tr>";
                echo "<th>sale_id</th>";
                echo "<th>customer_name</th>";
                echo "<th>customer_mail</th>";
                echo "<th>product_id</th>";
                echo "<th>product_name</th>";
                echo "<th>product_price</th>";
                echo "<th>sale_date</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['sale_id'] . "</td>";
                echo "<td>" . $row['customer_name'] . "</td>";
                echo "<td>" . $row['customer_mail'] . "</td>";
                echo "<td>" . $row['product_id'] . "</td>";
                echo "<td>" . $row['product_name'] . "</td>";
                echo "<td>" . $row['product_price'] . "</td>";
                echo "<td>" . $row['sale_date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$costumer = "SELECT * FROM sales WHERE customer_name='Reto Fanzen' ";

echo "<h3>Sort by COSTUMER name for example: Reto Fanzen</h3>";
if($result = mysqli_query($link, $costumer)){
    if(mysqli_num_rows($result) > 0){
        echo "<table style='border-width:1px; border-style:solid; border-color:black;'>";
            echo "<tr>";
                echo "<th>sale_id</th>";
                echo "<th>customer_name</th>";
                echo "<th>customer_mail</th>";
                echo "<th>product_id</th>";
                echo "<th>product_name</th>";
                echo "<th>product_price</th>";
                echo "<th>sale_date</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['sale_id'] . "</td>";
                echo "<td>" . $row['customer_name'] . "</td>";
                echo "<td>" . $row['customer_mail'] . "</td>";
                echo "<td>" . $row['product_id'] . "</td>";
                echo "<td>" . $row['product_name'] . "</td>";
                echo "<td>" . $row['product_price'] . "</td>";
                echo "<td>" . $row['sale_date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $costumer. " . mysqli_error($link);
}




$price = "SELECT * FROM sales ORDER BY product_price ASC ";

echo "<h3>Sort by PRICE ASC</h3>";
if($result = mysqli_query($link, $price)){
    if(mysqli_num_rows($result) > 0){
        echo "<table style='border-width:1px; border-style:solid; border-color:black;'>";
            echo "<tr>";
                echo "<th>sale_id</th>";
                echo "<th>customer_name</th>";
                echo "<th>customer_mail</th>";
                echo "<th>product_id</th>";
                echo "<th>product_name</th>";
                echo "<th>product_price</th>";
                echo "<th>sale_date</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['sale_id'] . "</td>";
                echo "<td>" . $row['customer_name'] . "</td>";
                echo "<td>" . $row['customer_mail'] . "</td>";
                echo "<td>" . $row['product_id'] . "</td>";
                echo "<td>" . $row['product_name'] . "</td>";
                echo "<td>" . $row['product_price'] . "</td>";
                echo "<td>" . $row['sale_date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $price. " . mysqli_error($link);
}


$product = "SELECT * FROM sales WHERE product_id=1 ";

echo "<h3>Sort by Product number for example 1";
if($result = mysqli_query($link, $product)){
    if(mysqli_num_rows($result) > 0){
        echo "<table style='border-width:1px; border-style:solid; border-color:black;'>";
            echo "<tr>";
                echo "<th>sale_id</th>";
                echo "<th>customer_name</th>";
                echo "<th>customer_mail</th>";
                echo "<th>product_id</th>";
                echo "<th>product_name</th>";
                echo "<th>product_price</th>";
                echo "<th>sale_date</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['sale_id'] . "</td>";
                echo "<td>" . $row['customer_name'] . "</td>";
                echo "<td>" . $row['customer_mail'] . "</td>";
                echo "<td>" . $row['product_id'] . "</td>";
                echo "<td>" . $row['product_name'] . "</td>";
                echo "<td>" . $row['product_price'] . "</td>";
                echo "<td>" . $row['sale_date'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
		

		
		
		
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $product. " . mysqli_error($link);
}


/*

$sql_qry="SELECT SUM(product_price) AS count FROM tbl_npt WHERE product_id='1'";

$duration = $connection->query($sqli_qry);
while($record = $duration->fetch_array()){
    $total = $record['count'];
}

echo $total;
 */
// Close connection
mysqli_close($link);

?>