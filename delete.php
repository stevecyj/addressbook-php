<?php

include "function/db.php";

$id = $_POST['id'];

$sql = "DELETE FROM contacts WHERE id=$id";

$conn->exec($sql);

//echo "Record deleted Successfully";

header('location: '.$_SERVER['HTTP_REFERER']);



?>