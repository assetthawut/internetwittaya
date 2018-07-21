<?php
	get_header();
	get_sidebar();
?>	
	

<?php 	if(have_posts()):

		while( have_posts()):the_post(); ?>
		
		<h3> <?php 	the_title();  ?> </h3>
		<?php 	the_content(); ?>
		<b>
			<?php  the_category(); ?>
			<?php  the_time(); ?>
		</b>
<?php 
		endwhile;
	endif;
	get_sidebar();
	get_footer();
?>
