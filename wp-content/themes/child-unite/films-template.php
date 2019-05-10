<?php
/**
 * Created by PhpStorm.
 * User: emmanuelajoku
 * Date: 4/6/19
 * Time: 11:00 PM
 */

    get_header();
    query_posts(array(
       'post_type' => 'films'
    )); ?>
    <?php
    while (have_posts()) : the_post(); ?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <p><?php the_excerpt(); ?></p>
    <?php endwhile;
    get_footer();
    ?>