<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
   <?php roots_post_before(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <?php roots_post_inside_before(); ?>
         <header>
            <div class="post-date">
               <span class="month"><?php echo get_the_time('M'); ?></span>
               <span class="day"><?php echo get_the_time('d'); ?></span>
               <span class="year"><?php echo get_the_time('Y'); ?></span>
            </div>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
         </header>
			<?php the_content(); ?>
         <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>' )); ?>
         <footer>
            <span class="footer-categories">Posted in <ul><?php pliabilities_list_post_categories($post->ID);?></ul></span>
            <span class="footer-comments">
               <a href="<?php echo get_comments_link(); ?>"><?php if (get_comments_number() > 0){?>Comments (<?php echo get_comments_number(); ?>)<?php } else{?>Leave a Reply<?php } ?></a></span>
         </footer>
            <?php roots_post_inside_after(); ?>
      </article>
	<?php roots_post_after(); ?>
<?php endwhile; // End the loop ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
	<nav id="post-nav">
		<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'roots' ) ); ?></div>
		<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'roots' ) ); ?></div>
	</nav>
<?php endif; ?>
