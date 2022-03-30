<?php 

if(has_tag()) {
 
    the_tags(); //show tags

} elseif(has_category()) {

    the_category(); //show category

} else {
    //do something different
}

?>

<!--  -->



<h4>Tags: <?php the_tags();?></h4>
<?php the_tags('','','');?>
<?php the_tags(' ',' ',' ');?>