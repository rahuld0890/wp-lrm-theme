<?php
/*
	Template Name: Home Page	
*/

if ( ! defined( 'ABSPATH' ) ) :
    exit; // Exit if accessed directly
endif;

get_header(); ?>

	<?php get_template_part('template-parts/content','hero'); ?>
		
	<?php get_template_part('template-parts/content','homeupper'); ?>
	
	<?php get_template_part('template-parts/content','clientgrid'); ?>
	
	<?php get_template_part('template-parts/content','homecounter'); ?>
	
	<?php get_template_part('template-parts/content','contact'); ?>

<?php get_footer(); ?>