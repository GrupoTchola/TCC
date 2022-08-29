<?php
require_once 'init.php';
// pega o ID da URL
$id = isset($_GET['email']) ? $_GET['email'] : null;
// valida o email do usuário 
if (empty($email))
{
    echo "Email não informado ";
    exit;
}
// remove do banco
$PDO = db_connect();
$sql = "DELETE FROM dados WHERE email = :email";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':email', $id, PDO::PARAM_INT);
if ($stmt->execute())
{
    header('Location: index2.php');
}
else
{
    echo "Erro ao acessar ";
    print_r($stmt->errorInfo());
}