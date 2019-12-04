<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<h1 align="center">Address Book</h1>




<form action="addContact.php">
    <button id="btn_add_contact"><a href="addContact.php" id="btn_link" target="_blank">新增連絡人</a></button>

</form>


<?php

include "function/db.php";

try {
    $stmt = $conn->prepare("SELECT * FROM contacts");
    $stmt->execute();

    $record_count = $stmt->rowCount(); //Get number of records
//echo $record_count;
    $record_per_page = 5; //Display 5 records in each page

//$page_count = $record_count / $record_per_page;

    //echo "<br>".$page_count;

    $rmain = $record_count % $record_per_page;

    if ($rmain) {
        $page_count = ($record_count / $record_per_page) + 1;//+1 means if reminder then add another page
    } else {
        $page_count = $record_count / $record_per_page;
    }

    if (isset($_GET['pn'])) {
        $pn = $_GET['pn']-1;
        $offset = $pn * $record_per_page;
        $i = $pn * $record_per_page;
    } else {
        $offset = 0;
        $i = 0;
    }

    $sql = $conn->prepare("SELECT * FROM contacts LIMIT $record_per_page OFFSET $offset");
    $sql->execute(); ?>

    <table   border="1" style="border-collapse: collapse">

        <tr>
            <th>人數</th>
            <th>頭像</th>
            <th>姓氏</th>
            <th>名字</th>
            <th>電子郵件</th>
            <th>手機</th>
            <th>連絡地址</th>
            <th>刪除</th>
            <th>編輯</th>

        </tr>




        <?php

        while ($result = $sql->fetch(PDO::FETCH_ASSOC)) {
            ?>

            <tr>
                <td><?php echo ++$i?></td>
                <td><img src="<?php echo $result['ImgPath']?>" width="100" height="100"></td>
                <td><?php echo $result['Fname']?></td>
                <td><?php echo $result['Lname']?></td>
                <td><?php echo $result['Email']?></td>
                <td><?php echo $result['Phone']?></td>

                <td><?php echo $result['Address']?></td>

                <td>
                    <form action="delete.php" method="post">

                        <input type="hidden" name="Id" value="<?php echo $result['ID']?>">
                        <input type="submit" style="padding: 10px 24px;background-color: purple;color: white" value="Delete">
                    </form>

                </td>

                <td>

                    <form action="editfrm.php" method="post">
                        <input type="hidden"  name="contactId" value="<?php echo $result['ID']?>">
                        <input type="submit" style="padding: 10px 24px;background-color: purple;color: white" value="Edit">
                    </form>

                </td>

            </tr>
            <?php
        } ?>
    </table>

    <?php


    for ($j = 1 ; $j<=$page_count ; $j++) {
        ?>

        <div style="margin-top:5px" class="pagination">

            <a href="index.php?pn=<?php echo $j ?>"><?php echo $j?></a>

        </div>

        <?php
    }
} catch (PDOException $e) {
    echo "Connection failed: ".$e->getMessage();
}

?>


</body>



</html>

