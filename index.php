<?php include('includes/header.php'); session_start(); ?>

<div class="container">
<div class="row">
<div class="col-md-12">

<?php

if(isset($_SESSION["status"]) && $_SESSION["status"] != null ){

   
  
?>

<div class="alert alert-warning alert-dismissable fade show">
<strong><?php echo $_SESSION["status"];   unset($_SESSION["status"]); ?></strong>

</div>
<?php


}

?>


</div></div>

</div>

<?php include('includes/footer.php'); ?>