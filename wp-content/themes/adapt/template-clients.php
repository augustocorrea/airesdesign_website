<?php
/*
Template Name: Clients
*/

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<header id="page-heading">
  <?php if(!empty($user_ID)): ?>
    <h1><?php the_title(); ?></h1>
  <?php else: ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://www.airesdesign.com.ar/acceder/">
    Redireccionando...
  <?php endif; ?>		
</header>
<!-- /page-heading -->

<article class="post clearfix">
    <div class="entry clearfix">
    <?php if(!empty($user_ID)): ?>
      <?php the_content(); ?>
    <?php endif; ?>
	  </div>
	<!-- /entry -->    
</article>
<!-- /post -->

<?php endwhile; ?>
<?php endif; ?>	  
<?php get_sidebar(); ?>
<?php get_footer(); ?>



    		  	<?php if(empty($user_ID)): ?>
    		  	  <p class="view-info">Para ver la información del vendedor tenés que registrarte.</p>
    		  	<?php endif; ?>
