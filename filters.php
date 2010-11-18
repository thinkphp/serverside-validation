<?php

$args = array(
  'name' => FILTER_SANITIZE_SPECIAL_CHARS,
  'message' => FILTER_SANITIZE_SPECIAL_CHARS,
  'homepage' => FILTER_SANITIZE_SPECIAL_CHARS,
  'email' => FILTER_SANITIZE_SPECIAL_CHARS,
  'done' => FILTER_SANITIZE_SPECIAL_CHARS
);

$_POST = filter_input_array(INPUT_POST, $args);
$email = $_POST['email'];
$name = $_POST['name'];
$homepage = $_POST['homepage'];
$message = $_POST['message'];
$filtered = true;
?>