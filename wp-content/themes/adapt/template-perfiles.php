<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 * Template Name: Perfiles
 */
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<header id="page-heading">
    <h1><?php the_title(); ?></h1>      
</header>

<div class="post clearfix pag_perfiles">

    <?php
    //query posts
        query_posts('category_name=perfiles');
    ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  
        <!--Tomamos la imagen del post-->
        <div class="contenedor_perfil">    
            <div class="imagen_perfil">
            <?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>            
            </div>
            <!--Tomamos el permalink-->
            <h1><a href="<?php the_permalink(' ') ?>"><?php echo get_the_title($ID); ?></a></h1>      
            <!--Tomamos la etiqueta-->
            <?php 
            $posttags = get_the_tags();
                if ($posttags) {
                    foreach($posttags as $tag) {
                    ?> <p><?php echo $tag->name;?> </p> <?php
                }
            }
            ?>
            <!--Tomamos el contenido-->
            <p class="p_perfiles"><?php echo get_the_content();?></p>
</div>  
        <?php endwhile; ?>
        <?php endif; ?>   
          
    
    <?php pagination(); wp_reset_query(); ?>

</div>
<!-- /post -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>