<?php
session_start();
print $_SESSION["user"];

include('classes/StaticHTML.class.php');
include('classes/DB.class.php');

$page = new StaticHTML();
$dbc = new DB();
$db = $dbc->getDatabaseConnection();

print $page->head("Wilkommen!");

print 'Jippie!';

print $page->foot();
