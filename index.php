<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto MVC</title>

    <link rel="stylesheet" href="src/exemplo.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<?php
    require_once ('MVC/model/Pessoa.php');
    require_once ('MVC/dao/PessoaDAO.php');

    $pessoaDao = new PessoaDAO();

        if(!empty($_GET['id'])) {
            $obj = $pessoaDao->getById($_GET['id']);
        } else {
            $obj = new Pessoa();
        }
?>

<body>
<div class="wrapper">
        <h1>Projeto MVC</h1>

        <div class="menu">
            <a href="index.php">CADASTRAR</a>
            <a href="lista.php">LISTA DE CADASTRADOS</a>
        </div>
        <h2>Novo Cadastro</h2>
        <form autocomplete="off" suggestion="off">
        <input id="id" name="id" type="hidden" value="<?php echo $obj->id ?>">
            <input type="text" id="nome" name="nome" placeholder="Nome" value="<?php echo $obj->nome ?>" required>
            <input type="date" id="datanascimento" name="datanascimento" value="<?php echo $obj->datanascimento ?>" required>
            <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $obj->email ?>" required>
            <input type="tel" id="telefone" name="telefone" placeholder="Fone" pattern="[0-9]{11}" maxlength="11" value="<?php echo $obj->telefone ?>" required>

            <button id="btnEnviar" type="button">CADASTRAR</button>
        </form>
    </div>
</body>

<script src="src/exemplo.js"></script>

</html>