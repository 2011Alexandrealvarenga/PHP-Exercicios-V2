<?php 

$dsn = "mysql:dbname=test;host=localhost";
$dbuser = 'root';
$dbpass = '';

// tratamento de erro
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    echo "Conexao estabelecida";
}catch(PDOException $e) {
    echo 'falou: '.$e->getMessage();
}
?>