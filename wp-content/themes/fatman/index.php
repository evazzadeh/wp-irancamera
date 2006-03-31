<?php get_header(); ?>
<div id="main">
<div id="content " class="row container">
<div class="span6 offset3">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <article>
     <h2><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h2>
     <?php
      if ( has_post_thumbnail() )
      {
        echo "<a href='".get_permalink()."'>";
        the_post_thumbnail( 'medium');
        echo "</a>";
      the_excerpt();
      }
      else
      {
        the_content();
      }
    ?>
   </article>
   <?php endwhile; else:endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>