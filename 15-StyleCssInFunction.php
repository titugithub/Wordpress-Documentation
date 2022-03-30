<?php

function addcss(){
    if(is_page()){
        ?>
            <style>
                .cssclass{
                    background: url("<?php echo the_post_thumbnail_url(null,"large")?>")
                }
            </style>
        <?php
    }
}

if(is_front_page()){
    if(current_theme_supports("custom-header")){
        ?>
            <style>
                .header{
                    background : url("<?php echo header_image()?>")
                }
            </style>
        <?php
    }
}


add_action( "wp_head","addcss")


?>