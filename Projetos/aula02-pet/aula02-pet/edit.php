<?php
include('conexao.php');
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM usuario WHERE id = '$id' LIMIT 1";
    $result = mysqli_query($mysqli, $sql);
    $dados = mysqli_fetch_assoc($result);
    if ($result == true) {
        // echo '<script>alert("Cadastrado com sucesso!")</script>'; OK
    } else {
        die(mysqli_error($mysqli));
    }
}
?>

<?php
//chama o arquivo de conexão com o bd


// declaração de variáveis
$id = $_GET["id"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = ("UPDATE usuario SET email='$email', senha='$senha' WHERE id=$id");
$result = mysqli_query($mysqli, $sql);
if ($result == true) {
    echo "<h1>Atualizar Dados do Usuario</h1>";
} else {
    die(mysqli_error($mysqli));
}

?>

<section id="formulario">
    <form class="col-6" action="" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" value="<?php echo $dados["email"]; ?>" name="email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <input type="password" class="form-control" id="inputPassword5" value="<?php echo $dados["senha"]; ?>" name="senha">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="entrar">Atualizar</button>
    </form>
</section>