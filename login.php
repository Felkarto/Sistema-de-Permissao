<?php
session_start();

if (isset($_POST['botao']) && $_POST['botao'] == "Logar") {

    $login = Usuario::logar($_POST['login'], $_POST['senha']);

    if (isset($_SESSION['login']) && isset($_SESSION['id'])) {
        echo "Você está Logado <a href='index.php'> Acesso Concedido</a>";

    } else {
        echo "Você não está logado";
    }
}

?>





<form method="post">
    usuario: <input type='text' name='login'><br/>
    senha: <input type='password' name='senha'>
    <input type='submit' name='botao' value='Logar'>

</form>
