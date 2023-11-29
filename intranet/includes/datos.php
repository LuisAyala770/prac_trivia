<?php
$mysqli = new mysqli("localhost", "root", "", "prac_trivia");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: " . $mysqli->connect_error;
}
