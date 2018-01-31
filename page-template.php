<?php 

/**
 * Template Name: Full Width Page
 
 * @package WordPress
 * @subpackage WordUp

 */

 ?>

    <div class="page container mt-2 mb-5">
		
		<?php the_post_thumbnail(array('750,9999')); ?>			
			
		<div class="pl-6"><?php the_content(); ?></div>

	</div>


