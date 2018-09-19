<?php
/*
	Template Name: Home Page	
*/

get_header(); ?>

	<?php get_template_part('content','hero'); ?>
		
	<?php get_template_part('content','homeupper'); ?>
	
	<?php get_template_part('content','clientgrid'); ?>
	
	<?php get_template_part('content','homecounter'); ?>
	
	<?php get_template_part('content','contact'); ?>

<?php get_footer(); ?>