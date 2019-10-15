<?php
/**
 * Template Name: Movies Reviews
 */
?>
<div class="blog-wrapper col-2-items">
<?php get_header(); ?>
$args = array(
    'post_type' => 'Movies_review'
);

$the_query = new WP_Query($args);

?>
<?php if( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


<?php the_title( '<h1 class="entry-title"><a href="'.esc_url(get_permalink()).'">', '</a></h1>' );?>  
<?php the_post_thumbnail('blog-thumbnail') ?>
<br>
<i>Posted on- <?php echo get_the_date();?></i>
<br>
<i>Written By <?php the_author(); ?></i>
<br>
<?php the_tags(); ?>
<?php the_excerpt(); ?>
<?php endwhile; ?>
<?php endif; ?>
</div>
<?php dynamic_sidebar('sample-sidebar'); ?>
<?php get_footer(); ?>