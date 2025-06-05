<?php
session_start();
$_SESSION['usuario']="naologado";
session_destroy();
header("location: index.php");
?>
