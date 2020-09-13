<?php

$host = 'localhost';
$db   = 'hamper app';
$user = 'root';
$pass = '';
$carset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$carset";
$opt = [
		\PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
		\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
		\PDO::ATTR_EMULATE_PREPARES   => false,
		];
$pdo = new PDO($dsn, $user, $pass, $opt);