<?php
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        if (isset($_POST['senha']) && !empty($_POST['senha'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            echo "Meu email eh: " . $email . " e minha senha eh: " .$senha;
        }
    }
?>

<form method="POST">
    E-mail:
    <input type="text" name = "email"/> <br><br>
    Senha:
    <input type="password" name = "senha"/> <br><br>
    <input type="submit" value = "Enviar Dados"/>
</form>


