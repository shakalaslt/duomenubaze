<?php 

$servername = "localhost";
$username = "Mindam";
$password = "nesvarbu";
$dbname = "eshop";

$err="";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
mysqli_set_charset($conn,"utf8");

if (isset($_POST['submit'])){
    $sql= "INSERT INTO products (pavadinimas, kaina, aprašymas, svoris, kiekis) VALUES ('".$_POST['pavadinimas']."','". $_POST['kaina']."','". $_POST['aprašymas']."','". $_POST['svoris']."','". $_POST['kiekis']."')";

 mysqli_query($conn, $sql);

}


$sql = "SELECT * FROM products ORDER BY id";
 
$result = mysqli_query($conn, $sql);
$products = [];
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		array_push($products, $row);
}
} else {
	$err = "Patiekalų nerasta";
}



if(isset($_GET['delete'])){
    $sql = "DELETE FROM products WHERE id = ".$_GET['delete'];
    mysqli_query($conn, $sql);

}
mysqli_close($conn);




include "view.php";
?>




