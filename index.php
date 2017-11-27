<?php get_header() ?>
<div class="col-sm-8 blog-main">
<?php 
if( have_posts()){
while( have_posts()) : the_posts()
?>
<div class="blog-posts">
    <h2 class="blog-post-title">
        <?php the_title(); ?>
    </h2>
    <p class="blog-post-meta">
        <?php the_date() ?> by <?php the_author() ?>
    </p>
    <?php the_content() ?>
</div> <!-- blog.post -->
<?php 
endwhile
}
?>

<nav>
    <ul class="paper">
        <li><?php next_posts_link('Previous') ?></li>
        <li><?php previous_posts_link('Next') ?></li>
    </ul>
</nav>

</div> <!-- .blog-main -->
<?php get_footer() ?>