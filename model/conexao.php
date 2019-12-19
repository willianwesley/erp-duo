<?php
// Definição de const do banco de dados

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DBNAME','erpduo');

$conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';',USER,PASS);
?>