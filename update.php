<?php

include "function/db.php";

try
{

    $idupdate = $_POST['idupdate'];
    $fnameUpdate = $_POST['fname'];
    $lnameUpdate = $_POST['lname'];
    $emailUpdate = $_POST['email'];
    $phoneUpdate = $_POST['phone'];
    $addressUpdate = $_POST['address'];

    $sql = "UPDATE contacts SET Fname = '$fnameUpdate',Lname='$lnameUpdate',Email='$emailUpdate',Phone = '$phoneUpdate',Address = '$addressUpdate' WHERE id='$idupdate'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header("location:index.php");

}
catch (PDOException $e)
{
    echo "Error: ". $e->getMessage();
}


?>