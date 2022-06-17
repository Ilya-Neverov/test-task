<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$bd_name = 'shape';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = mysqli_connect($host, $user ,$pass, $bd_name );

//printf("Начальный набор символов: %s\n", mysqli_character_set_name($mysqli));

mysqli_set_charset($mysqli, "utf8mb4");

//printf("Текущий набор символов: %s\n", mysqli_character_set_name($mysqli));

//printf("Успешно... %s\n", $mysqli->host_info);        // проверка


