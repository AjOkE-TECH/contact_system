<?php
include "../config/db.php";

$id = intval($_GET['id']);

$sql = "DELETE FROM contacts WHERE id = $id";
mysqli_query($conn, $sql);

header("Location: dashboard.php");
?>