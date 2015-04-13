<?php
require('app/config.php');

$db = new PDO('mysql:dbname='.DB_NAME, DB_USER, DB_PASS);

$sql = file_get_contents('databases/saathi.sql');
$db->exec($sql);

$sql = file_get_contents('databases/assets.sql');
$db->exec($sql);

$sql = file_get_contents('databases/contact_details.sql');
$db->exec($sql);

$sql = file_get_contents('databases/organisations_cyclone_flood_tsunami.sql');
$db->exec($sql);

$sql = file_get_contents('databases/organisations_epidemic.sql');
$db->exec($sql);

$sql = file_get_contents('databases/organisations_earthquake.sql');
$db->exec($sql);

$sql = file_get_contents('databases/organisations_fire.sql');
$db->exec($sql);
