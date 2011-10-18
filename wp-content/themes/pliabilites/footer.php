	<?php roots_footer_before(); ?>
		<footer id="content-info" class="<?php global $roots_options; echo $roots_options['container_class']; ?>" role="contentinfo">
         <?php roots_footer_inside(); ?>
         <div class"container">
         <div id="post-nav" class="span-15 last">
           <div class="alignleft"><?php next_posts_link('&laquo; Older Posts'); ?></div>
           <div class="alignright"><?php previous_posts_link('Newer Posts &raquo;', ''); ?></div>

         </div>
         </div>
			<div class="container">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
				<?php endif; ?>
				<p class="copy span-24"><small>Copyright &copy; 2011 Phillip Gomez</small></p>
			</div>	
		</footer>
		<?php roots_footer_after(); ?>	
	</div><!-- /#wrap -->

<?php wp_footer(); ?>
<?php roots_footer(); ?>

	<!--[if lt IE 7]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
		<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
	<![endif]-->


</body>
</html>
