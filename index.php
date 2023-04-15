<?php
    session_start();
    $_SESSION['name'] = isset($_SESSION['name']) ? $_SESSION['name'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Задание 8</title>
    <link rel="stylesheet" type="text/css" href="./HTML/style.css">
</head>
<body>
<div>
<?php
    include ("./HTML/about.php");
    if (strlen($_SESSION['name'])){
      echo '<p>Здравствуйте ' . $_SESSION['name'] . '!</p>';
      include ("./HTML/formexit.php");
    }else{
      include ("./HTML/formregistr.php");
    }
?>
</div>
</body>
</html>

