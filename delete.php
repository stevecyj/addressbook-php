<?php

include "function/db.php";

$id = $_POST['Id'];

$sql = "DELETE FROM contacts WHERE ID=$id";

$conn->exec($sql);

//echo "Record deleted Successfully";

header('location: '.$_SERVER['HTTP_REFERER']);



?>