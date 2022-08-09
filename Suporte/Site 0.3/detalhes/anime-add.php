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
$sql = "SELECT id, name, email, gender, birthdate "
        . "FROM users ORDER BY name ASC";

// conta o total de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();

// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>

<html>
    <head>
        <meta name="0.1" content="with=device-width, initial-scale=1.0">
        <title>Web Site de Teste II</title>
        <link rel="stylesheet" href="css/style-2.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      </head>
      <body>
        

      
<header>

<nav class="navbar">
  <a class="navbar-brand" href="#">
    <img src="images/logo.png" width="250px" height="70px" alt="">
  </a>
</nav>


     <div class="anime-desc">
           <img src="<?php $banner?>" alt="" class="banner">
           <br></br>
           <h1 class="anime-title"><?php echo $name?></h1>
           <br></br>
           <br></br>
           <br></br>
           <p class="sinopse">
             <?php echo $sinopse?>
            </p>
            <br></br>
            <br></br>

          <div class="detalhes">
<div class="row">


<div class="col nota" style="color:#5B5B5B; font-size: 35px;">
  <span style="color:#A49F9F; font-size: 65px;"><?php echo $nota?></span>
  /10
</div>

<div class=" col eps" style="font-size: 18px;">
  <span style="color:#A49F9F; font-size: 45px;"><?php echo $eps?></</span>
  <span style="color:#A49F9F; font-size: 28px;">episódios</span>
</div>

<div class="col classificacao">
  <img src="<?php $classificacao?>" alt="classificacao-10anos" class="recomendacaoidade">
</span>
</div>

</div>
            <br>
            <a href="<?php echo $watch?>" class="watch">Assistir</a>
            <br></br>



         </div>
</header>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

         </body>
         </html>