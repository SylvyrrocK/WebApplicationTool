<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Test</title>
</head>
<body>

<form action="index.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>

<footer>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
?>

<?php
echo "The time is " . date("h:i:sa");
?>

<br> © 2022-<?php echo date("Y");?>
</footer>
</html>
