<?php $conn = new PDO('mysql:host=localhost;dbname=daftclub', 'root', ''); ?>
=======

<?php
$servername = "34.125.201.15:3306";
$database = "daftclub";
$username = "test";
$password = "sam";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

?>
