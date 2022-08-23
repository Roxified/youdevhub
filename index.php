<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Script</title>
    <link rel="stylesheet" href="">
</head>

<body>

    <h4>FILE UPLOAD</h4>

    <?php

    $_SESSION['tutor'] = 'Favour';
    $_SESSION['track'] = 'Frontend';
    $_SESSION['cohort'] = '2.0';
    $_SESSION['academy'] = 'YouDevHub';

    ?>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend> File to Upload</legend>
            <input type="file" name="file_upload"><br><br><br>
            <input type="submit" name="upload" value="Upload File">
        </fieldset>

    </form>



</body>

</html>