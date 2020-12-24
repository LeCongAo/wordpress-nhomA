<?php
get_header();

if(have_posts() ):
    while(have_posts()) : the_post();?>
    <article class="post">
        <h2><?php the_title() ?></h2>
        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
        <?php the_content() ?>
    </article>
    <?php endwhile;
else :
    echo '<p> There are not post! </p>';
endif;
?>
<?php
get_footer();
?>