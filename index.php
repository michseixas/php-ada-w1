<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PHP</title>
</head>

<body>

<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['fname']);

  if ($name == 'Alice'|| $name == 'Bob' ) {
    echo "Hola, $name";
  } else {
    echo "No eres ni Alice ni Bob";
  }
}
?>

</body>
</html>

</body>

</html>