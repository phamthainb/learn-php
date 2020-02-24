<?php
include './controllers/loadPagesControllers.php';

$LoadPagesControllers = new LoadPagesControllers();

if (isset($_GET['loadPages'])) {
	$loadPages = $_GET['loadPages'];
	require_once 'router.php';
} else {
	$loadPages = 'home';
}
$LoadPagesControllers->DisplayPage($loadPages);
?>
