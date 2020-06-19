<div class="header--post" style="background: indigo; color: white; padding: 30px; font-size: 30px;">


	<!-- Breadcrumbs
    ============================================= -->
    <?php breadcrumbs(); ?>




	<!-- Title
    ============================================= -->
	<h1><?php single_post_title(); ?></h1>




	<!-- Post View Counter + Output
		 * IMPORTANT:
		 * Keep the template part in to track page views even if we aren't going to display them. 
		 * Allows for sort by most popular functionailty in filters
    ============================================= -->
	<?php get_template_part( 'includes/front/post-views' ); ?>
	<span style="padding: 5px; background: darkkhaki; font-size: 15px; display: block; color: #000;">Page Views: <?php echo context_get_post_view(); ?></span>



</div>