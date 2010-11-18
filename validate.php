<?php

if(!isset($filtered)) {include('filters.php');}
if(!isset($rules)) {include('rules.php');}

if(!isset($_POST['done'])) {

  include('form.php');

} else {

  $error = array();

  foreach(array_keys($rules) as $r) {

        if(!preg_match($rules[$r]['pattern'],$_POST[$r])) {

            $error[$r] = $rules[$r]['error'];
        }
  }

  if(sizeof($error)) {
     include('form.php');
  } else {
     include('thanks.php');
  }

}
?>