<?php get_header(); ?>

<div id="single_main">
	<div id="single" class="row container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></h2>
		<p><?php the_content(__('(more...)')); ?></p>
	<?php endwhile; else: ?><?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
