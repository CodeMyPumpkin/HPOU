<?php

require "../class/core-class.php";

require_once "conn.php";

$instance = new KitBuilder($pdo);

if (isset($_GET['addKit'])) {
	echo $instance -> addKit($_POST['array']);
}

if (isset($_GET['loadKit'])) {
	echo json_encode($instance -> loadKit($_GET['loadKit']));
}