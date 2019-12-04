
<?php

include "function/db.php";

try
{
    $editid = $_POST['contactId'];
    $stmt = $conn->prepare("SELECT * FROM contacts WHERE ID=$editid");
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $ID = $result['ID'];
    $fnameEdit = $result['Fname'];
    $lnameEdit = $result['Lname'];
    $emailEdit = $result['Email'];
    $phoneEdit = $result['Phone'];
    $addEdit = $result['Address'];
}
catch (PDOException $e)
{
    echo "Error: ". $e->getMessage();
}


?>

<link rel="stylesheet" type="text/css" href="style/style.css"/>
<form action="update.php" method="post">

    <p><input type="hidden" name="idupdate" value="<?php echo $ID?>"></p>
    <p><input type="text" name="fname" value="<?php echo $fnameEdit?>"></p>
    <p><input type="text" name="lname" value="<?php echo $lnameEdit?>"></p>
    <p><input type="text" name="email" value="<?php echo $emailEdit?>"></p>
    <p><input type="text" name="phone" value="<?php echo $phoneEdit?>"></p>
    <p><input type="text" name="address" value="<?php echo $addEdit?>"></p>
    <p><input type="submit" value="Change"></p>

</form>