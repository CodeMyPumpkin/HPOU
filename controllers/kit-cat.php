<?php

require "../class/core-class.php";

require_once "conn.php";

$instance = new KitBuilder($pdo);

if (isset($_GET['load'])) {
	echo json_encode($instance -> loadKits());
}