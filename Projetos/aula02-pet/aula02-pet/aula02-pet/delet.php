<?php
include("conexao.php");

if(isset($_GET["id"])){
    $id=$_GET["id"];

    $sql="DELETE FROM usuario WHERE id = '$id'";
    $result=mysqli_query($mysqli, $sql);
    if ($result == true) {
        header("location: index.php");
       // echo '<script>alert("Cadastrado com sucesso!")</script>'; OK
    } else {
        die(mysqli_error($mysqli));
    }
}

?>






