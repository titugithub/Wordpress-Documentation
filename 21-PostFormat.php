<!-- 
Folder Name : post-formats
content.php
content-audio.php 
content-video.php 
 -->


 <?php
while (have_posts()) {
  the_post(  );
  get_template_part("post-formats/content",get_post_format());

}


