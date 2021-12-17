<?php
if($_POST)//Recibe los datos del formulario del login
{
    include('dbcon.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->query("select * from miembros where username = '$username' and password = '$password';");
    //$count = $query->rowcount();
    
    $row = $query->fetch_assoc();
    if ($query->num_rows > 0){
    session_start();
    $_SESSION['id'] = $row['id_miembro'];
    header('Location: home.php');
    
    }else{
    header('Location: index.php'); 
    
    }
}
else
{
    echo "Info no enviada";
}
?>