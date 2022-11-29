<?php
include_once 'connection.php';

$email = $_POST["email"];
$senha = md5($_POST["senha"]);


$sql = "UPDATE usuario SET `email` = '$email',`senha` = '$senha'";
$result=mysqli_query($mysqli, $sql);


?>

<section id="formulario">
    <form class="col-6" action="edit.php?id=<?= $dados["id"] ?>" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" name="senha">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="entrar">Update</button>
    </form>
</section>