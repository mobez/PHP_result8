<?php
  session_start();
  $_SESSION['name'] = htmlspecialchars($_POST['name']);
  var_dump($_POST['name']);
  header("Location: /");
  exit;