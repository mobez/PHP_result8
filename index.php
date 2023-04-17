<?php
    session_start();
    if (isset($_SESSION)) {
      $_SESSION['name'] = isset($_SESSION['name']) ? $_SESSION['name'] : '';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Задание 8</title>
    <link rel="stylesheet" type="text/css" href="./html/style.css">
</head>
<body>
<div>
<?php
    include("./html/about.php");
    if (isset($_SESSION) && strlen($_SESSION['name'])){
      echo '<p>Здравствуйте ' . $_SESSION['name'] . '!</p>';
      include("./html/formexit.php");
    }else{
      include("./html/formregistr.php");
    }
?>
</div>
</body>
</html>

