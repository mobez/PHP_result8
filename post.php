<?php
  session_start();
  if (isset($_SESSION) && isset($_POST['name'])) {
    $_SESSION['name'] = htmlspecialchars($_POST['name']);
  }
  header("Location: ./");
  exit;