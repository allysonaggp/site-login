<?php

    
    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios (name,email,password)VALUES ('$name','$email','$password')");
    }
       

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airsoft Pernambuco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
       
        <h2 class="logo">Airsoft Pernambuco</h2>
        <!--barra de navegação-->
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
 
    </header>

    <!--caixa de Login de cadastro-->
    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span>
        <div class="form-box login">
            <!--tela de  Login-->
            <h2>Login</h2> 
            <form action="testLogin.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span> 
                    <input type="email" name="emailLogin" required>
                    <label>Email</label>
                </div>   
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span> 
                    <input type="password" name="passwordLogin" required>
                    <label>Password</label>
                </div>  
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember-me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <input class="btn" type="submit" name="submitLogin" value="Enviar">
                <!--<button type="submit" nome="submitLogin" class="btn">
                    Login
                </button>-->
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>
        <!--method="POST"-->
        <!--tela de cadastro-->
      <div class="form-box register">
            <h2>Registration</h2>
            <form action="#" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span> 
                    <input type="text" name="name" required>
                    <label>Username</label>
                </div>   
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span> 
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>   
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span> 
                    <input type="password" name="password"required>
                    <label>Password</label>
                </div>  
                <div class="remember-forgot">
                    <label><input type="checkbox">agree to the terms & conditions</label>
                </div>
                <button type="submit" name="submit" class="btn">
                    Register
                </button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>

                </div>
            </form>
        </div> 

    </div>
    


    <script src="script.js"></script>
    <!--script dos icones das caixas de login e cadastro-->
    <script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" > </script> 
    <script  nomodule  src = "https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js" > </script>
</body>
</html>