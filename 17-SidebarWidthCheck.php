<?php 

if(is_active_sidebar("sidebar-name")){
    ?>
        <div class="col-md-8">
    <?php
    }
else{
    ?>
        <div class="col-md-10 offset-md-1">
    <?php
}

?>

<!-- ---------------------- -->


<?php 

$var = "col-md-10 offset-md-1";

if(is_active_sidebar("sidebar-name")){
    $var = "col-md-8";
}


?>

<div class="<?php echo $var?>">


