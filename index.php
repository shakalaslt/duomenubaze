<?php 

$servername = "localhost";
$username = "Mindam";
$password = "nesvarbu";
$dbname = "eshop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
mysqli_set_charset($conn,"utf8");
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo"<table width='100%'>";
    echo"<tr><td><b>ID</b></td><td><b>Name</b></td><td><b>Price</b></td><td><b>Description</b></td></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo"<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td> " . $row["price"]. "</td><td>" . $row["description"]. "</td></tr>";
    }
    echo"<tr><td></td><td></td><td></td><td></td></tr>";
    echo"</table>";
} else {
    echo "0 results";
}



mysqli_close($conn);
?>










