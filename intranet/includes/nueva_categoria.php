<?php
require_once("datos.php");

$mysqli->query("INSERT INTO categorias (categoria) VALUES ('".$mysqli->real_escape_string($_POST['categoria'])."')"); //Evita las inyecciones de MYSQL...
header("location: ../nueva_categoria.php");
