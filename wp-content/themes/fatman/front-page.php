<?php get_header(); ?>
<div id="cover">
	<h1><?php bloginfo('name'); ?></h1>
</div>
<div id="news">
  <div class="container">
  <div class="row news auto">
  	<?php
	$count=0;
    $the_query = new WP_Query( 'posts_per_page=4' );?>
   	<?php if (have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post();?>
	<?php if ($count >0 && ($count%2) == 0)
	{
		echo "</div> <div class='row news'>";
	} ?>
     <div class="span6">
       <h2><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h2>
       <?php
		if(is_home())
		{
			if(has_post_thumbnail())
			{
				echo "<a href='".get_permalink()."'>";
				the_post_thumbnail( 'thumbnail');
				echo "</a>";
			}
			the_excerpt();
		}
		else
		{
			the_content();
		}
		$count = $count+1;
		?>
     </div>
     <?php endwhile; else: endif; ?>
	<?php if ($count >0 && ($count%2) != 0)
	{
		echo "</div>";
	} ?>
  </div>
  </div>
</div>

<div id="about" >
  <div class="container">
	<?php dynamic_sidebar( 'widget-about' ); ?>
  </div>
</div>

<div class="row" id="cantact_map">
	<div id="contact" class="span6">
	 <?php dynamic_sidebar( 'widget-contact' ); ?>
	</div>

	<div id="map" class="span6">
	 <?php dynamic_sidebar( 'widget-map' ); ?>
	</div>
</div>

<?php get_footer(); ?>