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

  <h4>DIANA ANCHOR & GET METHOD</h4>


  <form action="" method="POST">
    <?php if (isset($_POST['sub'])) {
      echo $_POST['username'] .
        "<br>";
      echo $_POST['password'] .
        "<br>";
      echo $_POST['ref'] .
        "<br>";
    }

    ?>
    <fieldset>
      <legend>Test Get</legend>
      <label for="">Username</label><br>
      <input type="text" name="username" value="" placeholder="Username"><br>
      <label for="">Password</label><br>

      <input type="text" name="password" value="" placeholder="Password"><br>
      <label for="">Referer Code</label><br>

      <input type="text" name="ref" value="" placeholder="Refereer"><br>
      <input type="submit" name="sub" value="Submit Form">
    </fieldset>
  </form>

</body>

</html>