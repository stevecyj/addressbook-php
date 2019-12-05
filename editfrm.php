
<?php

include "function/db.php";

try
{
    $editid = $_POST['contactid'];
    $stmt = $conn->prepare("SELECT * FROM contacts WHERE id=$editid");
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $id = $result['id'];
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

    <p><input type="hidden" name="idupdate" value="<?php echo $id?>"></p>
    
    <p>姓氏<input type="text" name="fname" value="<?php echo $fnameEdit?>"></p>
    
    <p>名字<input type="text" name="lname" value="<?php echo $lnameEdit?>"></p>
    
    <p>Email<input type="text" name="email" value="<?php echo $emailEdit?>"></p>
    
    <p>手機<input type="text" name="phone" value="<?php echo $phoneEdit?>"></p>
    
    <p>地址<input type="text" name="address" value="<?php echo $addEdit?>"></p>
    <p><input type="submit" value="確認修改"></p>

</form>