<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submitLogin']) && !empty($_POST['emailLogin']) && !empty($_POST['passwordLogin']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['emailLogin'];
        $password = $_POST['passwordLogin'];

        /* print_r('Email: ' . $email);
         print_r('<br>');
         print_r('Senha: ' . $senha);*/

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and password = '$password'";

        $result = $conexao->query($sql);

         /*print_r($sql);
         print_r($result);*/

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: index.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $password;
            header('Location: sistema.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: index.php');
    }
?>


