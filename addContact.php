
<html>
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Add Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div>

    <form action="contactAdded.php" method="post" enctype="multipart/form-data" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
        <ul>

            <?php
            if (!empty($_GET['fnameErr'])) {
                ?>
            <li style="color: red">

                <?php
                echo $_GET['fnameErr'];
                echo "<br>";
            }
                ?>

            </li>
            <?php
            if (!empty($_GET['lnameErr'])) {
                ?>
            <li style="color: red">

                <?php
                echo $_GET['lnameErr'];
                echo "<br>";
            }
                ?>

            </li>
            <?php
            if (!empty($_GET['emailErr'])) {
                ?>
            <li style="color: red">

                <?php
                echo $_GET['emailErr'];
                echo "<br>";
            }
                ?>

            </li>
            <?php
            if (!empty($_GET['phoneErr'])) {
                ?>
            <li style="color: red">

                <?php
                echo $_GET['phoneErr'];
                echo "<br>";
            }
                ?>

            </li>
            <?php
            if (!empty($_GET['imgErr'])) {
                ?>
            <li style="color: red">

                <?php
                echo $_GET['imgErr'];
                echo "<br>";
            }
                ?>

            </li>


            <?php
            if (!empty($_GET['failed'])) {
                ?>
            <li style="color: red">

                <?php
                echo $_GET['failed'];
                echo "<br>";
            }
                ?>

            </li>




        </ul>



        <div class="w3-row w3-section">

                <?php
                if (!empty($_GET['success'])) {
                    ?>
            <div class="w3-panel w3-green">
                <?php
                    echo $_GET['success'];
                    echo "<br>"; ?>
            </div>
                <?php
                }

                ?>

            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="first" type="text" placeholder="First Name">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-map-marker"></i></div>
            <div class="w3-rest">

                <textarea name="address" class="w3-input w3-border"></textarea>

            </div>
        </div>


        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-image"></i></div>
            <div class="w3-rest">
                Select Image to upload
                <input type="file" name="fileToUpload">

            </div>

            <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" name="submit">Add Contact</button>
            <a href="index.php">Back to Home</a>
        </div>
    </form>


</div>



</body>
</html>