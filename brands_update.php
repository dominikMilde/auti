<?php

require('connect.php');

$sql = "UPDATE brands SET name='" .$_POST['name']. "', year_est='" . $_POST['year_est'] . "' WHERE id=" . $_POST['id'] . ";";
$mysqli->query($sql);
//echo($sql);

header('Location: brands.php');
?>