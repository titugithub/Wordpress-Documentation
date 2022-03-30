<div class="pots-meta">
    <ul>
    <li><a href="#"><?php echo get_the_date();?></a></li>
    <li><?php the_category(', ');?></li>
    <li><?php the_author_posts_link(); ?></li>
    </ul>
</div>

<!-- Linking to Author Pages from Posts -->

<!-- If you are going to use author pages, you will probably want to make sure that when a post is displayed, it comes with a link to the author page. You can generate this link, within The Loop, by using the the_author_posts_link Template Tag. For example: -->


<p>Written by: <?php the_author_posts_link(); ?></p>


