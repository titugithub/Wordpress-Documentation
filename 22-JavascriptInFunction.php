<?php 

function wpb_hook_javascript_footer() {
    ?>
        <script>
          // your javscript code goes
        </script>
    <?php
}
add_action('wp_footer', 'wpb_hook_javascript_footer');


?>

