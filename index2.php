<?php
require_once 'init.php';
// abre a conexão
$PDO = db_connect();

// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), 
// mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
$sql_count = "SELECT COUNT(*) AS total FROM users ORDER BY name ASC";

// SQL para selecionar os registros
$sql = "SELECT email, senha "
        . "FROM users ORDER BY name ASC";

// conta o total de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();

// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive fitness and gym website design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style2.css">
	<script src="https://kit.fontawesome.com/62b2e9a78b.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">

        <a href="#" class="logo"> <span>Boa</span>Forma </a>
    
        <div id="menu-btn" class="fas fa-bars"></div>
    
        <nav class="navbar">
            <a href="#perfil">Home</a>
            <a href="#perfil">Avisos</a>
            <a href="#perfil">Sobre</a>
            <a href="#perfil">Contato</a>
            <a href="#perfil">Perfil</a>
        </nav>

    </header>
    

    
   <div class="main-login">
    <div class="left-login">
        <img src="images/home-bg-1.jpg" alt="">
    </div>






    <div class="right-login"><div class="form-box">
        <h1>Faça o Login</h1>
        <div class="input-box">
        <i class="fa-solid fa-at"></i>
           <input type="email" placeholder="E-mail Id"> 
        </div>
        <div class="input-box">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Senha" id="passId"> 
        <span class="eye" onclick="eyefunction()">
            <i id="hide1" class="fa-solid fa-eye"></i>
            <i id="hide2" class="fa-solid fa-eye-slash"></i>
        </span>
        </div>
        <button type="button" class="login-btn">LOGIN</button>
    </div>
    <script>
        function eyefunction(){
            var x= document.getElementById("passId");
            var y= document.getElementById("hide1");
            var z= document.getElementById("hide2");

            if (x.type === "password") {
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            } else{
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
        }

        }
    </script></div>
   </div>
    








<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script.js"></script>
    
</body>
</html>
            