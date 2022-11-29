<?php
include("conexao.php");

$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$sql = "INSERT INTO usuario (email, senha, created_at) VALUES ('$email', '$senha', NOW())";

$res = $mysqli->query($sql);

if ($mysqli->insert_id) {
    // echo "ID: ". $mysqli->insert_id;
    header("Location: index.php");
}
