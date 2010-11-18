<?php
function renderError($name) {
 
     global $error;
     if($error[$name]) {
        echo'<span class="error">'.$error[$name].'</span>'; 
     } else {
        echo'<span class="required">*</span>'; 
     }
}
$req = $_SERVER['HTTP_X_REQUESTED_WITH'];
?>
<?php if($req == '') {  ?>
<form action="index.php" method="post" id="mainform">
<?php } ?>

 <?php if(sizeof($error)>0) { ?>
       <div class="error">The form cannot be sent yet as there were some errors. Plese fix them and try again.</div> 
 <?php } ?>

<div>
 <label for="name">Name <?php renderError('name');?></label>
 <input type="text" name="name" value="<?php echo $name;?>" id="name">
</div>
<div>
 <label for="email">Email <?php renderError('email');?></label>
 <input type="text" name="email" value="<?php echo $email;?>" id="email">
</div>
<div>
 <label for="homepage">Homepage <?php renderError('homepage');?></label>
 <input type="text" name="homepage" value="<?php echo $homepage;?>" id="homepage">
</div>
<div>
 <label for="message">Message <?php renderError('message');?></label>
 <textarea name="message" id="message" value="<?php echo $homepage;?>"><?php echo $message;?></textarea>
</div>
<div class="bar"><input type="submit" name="done" value="make it so!"></div>
<?php if($req == '') {  ?>
</form>
<?php } ?>
