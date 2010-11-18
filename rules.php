<?php
$rules = array(
   'name'=> array(
     'error' => 'Please enter a name that is at least 10 chars long',
     'pattern' => '/.{10}/i' 
   ),
   'message'=> array(
     'error' => 'Please enter a message that is at least 20 chars long',
     'pattern' => '/.{20}/i' 
   ),  
   'email'=> array(
     'error' => 'Please enter a valid email',
     'pattern' => '/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/i'
   ),
   'homepage'=> array(
    'error' => 'Please enter a valid URL',
    'pattern' => '|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i'
   ) 
);

if(isset($_GET['json'])) {
   echo 'rules='. json_encode($rules);
}
?>