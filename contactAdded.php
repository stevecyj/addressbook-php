<?php
include "function/db.php";
include "function/Myfunc.php";

//Insert data

 $firstname = $_POST['first'];
 $lastname = $_POST ['last'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];

 $fnameErr = $lnameErr = $emailErr = $phoneErr = $imgErr = $FailedUpload =$success = "";

 if ($_SERVER['REQUEST_METHOD']=='POST') {

     //first name validation
     if (empty($firstname)) {
         echo $fnameErr = "請輸入姓氏!";
         echo "<br>";
     } else {
         $fname = check_input($firstname);
         $fname_length = strlen($fname);

         //First name does not start with numbers
        //  if (!preg_match("/^[a-zA-Z]/", $fname)) {
        //      echo $fnameErr = "Numbers do not allow for using for firstname";
        //      echo "<br>";
        //  }
     }

     //Last name validation


     if (empty($lastname)) {
         echo $lnameErr = "請輸入名字";
         echo "<br>";
     } else {
         $lname = check_input($lastname);
         $lname_length = strlen($lname);

         //First name does not start with numbers
        //  if (!preg_match("/^[a-zA-Z]/", $lname)) {
        //      echo $lnameErr = "Numbers do not allow for using for last name";
        //      echo "<br>";
        //  }
     }

     //Email Validation

     if (empty($email)) {
         echo $emailErr = "請輸入Email";
         echo "<br>";
     } else {
         $em = check_input($email);

         if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
             echo $emailErr = "Email信箱格是不正確";
         }
     }

     //Phone number validation

     if (empty($phone)) {
         echo $phoneErr = "請輸入10位數字手機號碼";
         echo "<br>";
     } else {
         if (!preg_match('/^\d{10}$/', $phone)) {
             echo $phoneErr = "手機號碼格是不正確";
         }
     }


     // if get errors

     if ($fnameErr or $lnameErr or $emailErr or $phoneErr) {
         header("location:addContact.php?fnameErr=$fnameErr&lnameErr=$lnameErr&emailErr=$emailErr&phoneErr=$phoneErr&photoErr=$PhotoErr");
     } else {
         if (isset($_POST["submit"]) && isset($_FILES["fileToUpload"])) {
             $target_dir = "../images/";

             $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);

             $uploadOk = 1;

             $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

             if (empty($_FILES["fileToUpload"]["name"])) {
                 $ImgDefault = "../images/default.png";


                 // $imgName = "$target_file".basename($_FILES["fileToUpload"]["name"]);
                 //$sql = "INSERT INTO contacts (ImgPath) VALUES ('$ImgDefault')";
                 //$conn->exec($sql);
                 $stmt = $conn->prepare("INSERT INTO contacts(Fname,Lname,Email,Phone,Address,ImgPath) VALUES(:fname,:lname,:email,:phone,:address,:img)");
                 $stmt->bindParam(':fname', $fname);
                 $stmt->bindParam('lname', $lname);
                 $stmt->bindParam(':email', $email);
                 $stmt->bindParam(':phone', $phone);
                 $stmt->bindParam(':address', $address);
                 $stmt->bindParam(':img', $ImgDefault);


                 $stmt->execute();

                 echo $success =  "成功新增一筆資料";

                 header("location:addContact.php?success=$success");
             } else {

                 //check that file is an image or fake image file

                 $file_tmp = $_FILES["fileToUpload"]["tmp_name"];
                 $check = getimagesize($file_tmp);




                 if ($check!=false) {
                     echo $imgErr = "file is an image - ".$check['mime'].".";
                     $uploadOk = 1;
                 } else {
                     echo $imgErr = "上傳的檔案不是圖片格式";

                     $uploadOk = 0;

                     header("location:addContact.php?imgErr=$imgErr");
                 }

                 //check file already exist

                 if (file_exists($target_file)) {
                     echo $imgErr = "Sorry,file already exist";
                     $uploadOk = 0;
                     header("location:addContact.php?imgErr=$imgErr");
                 }

                 // check size of my file

                 if ($_FILES["fileToUpload"]["size"]>50000) {
                     echo $imgErr = "抱歉，上傳得檔案容量太大";
                     $uploadOk = 0;
                     header("location:addContact.php?imgErr=$imgErr");
                 }

                 //user can only image file not other file

                 if ($imageFileType !="jpg" && $imageFileType!="png" && $imageFileType!="jpeg" && $imageFileType!="gif") {
                     echo $imgErr = "抱歉,圖片格式僅支援 JPG,JPEG,PNG &GIF file 格式";
                     echo "<br>";
                     $uploadOk = 0;
                     header("location:addContact.php?imgErr=$imgErr");
                 }

                 //set error if $uploadOk = 0

                 if ($uploadOk ==0) {
                     echo $FailedUpload= "抱歉，選擇的檔案並未上傳，請重新操作";
                     header("location:addContact.php?imgErr=$imgErr&failed=$FailedUpload");
                 }



                 //if everything is ok,try to upload
                 else {
                     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                         echo $imgErr =  "The file ".basename($_FILES["fileToUpload"]["name"])." has been uploaded";

                         $imgName = "$target_dir".basename($_FILES["fileToUpload"]["name"]);
                         $stmt = $conn->prepare("INSERT INTO contacts(Fname,Lname,Email,Phone,Address,ImgPath) VALUES(:fname,:lname,:email,:phone,:address,:img)");
                         $stmt->bindParam(':fname', $fname);
                         $stmt->bindParam('lname', $lname);
                         $stmt->bindParam(':email', $email);
                         $stmt->bindParam(':phone', $phone);
                         $stmt->bindParam(':address', $address);
                         $stmt->bindParam(':img', $imgName);


                         $stmt->execute();

                         echo $success = "成功新增一筆資料";

                         header("location:addContact.php?success=$success");
                     }
                 }
             }
         }
     }
 }
