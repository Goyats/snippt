<?php get_header(); ?>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
 <header class="header">
<a href="<?php echo home_url( '/' ); ?>">
<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" >
</a> 
</header>

<article class="post">
 <?php the_post_thumbnail(); ?>
 <h1><?php the_title(); ?></h1>
 <div class="post__meta">
 <?php echo get_avatar(get_the_author_meta( 'ID' ), 40); ?>
 <p>
 date section<?php the_date(); ?>
 user name <?php the_author(); ?>
 
 </p>
 </div>
 <div class="post__content">
 <?php the_content(); ?>
 </div>
</article>
<?php endwhile; endif; ?