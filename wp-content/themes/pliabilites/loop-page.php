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
            <h1><?php the_title(); ?></h1>
         </header>
			   <?php the_content(); ?>
			   <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>' )); ?>
            <?php roots_post_inside_after(); ?>
      </article>
	<?php roots_post_after(); ?>
<?php endwhile; // End the loop ?>
