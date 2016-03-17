<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>


<div class="main" id="main">  	
	<div class="main-container">

<!-- 	<nav class="links">
		 <?php wp_nav_menu( array(
		      'container' => false,
		      'theme_location' => 'social-links'
		    )); ?>
	</nav>
	 -->
		<div class="work">
			<h2>WORK</h2>
		</div>

<!--     <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?> -->

    <?php
        $onePageQuery = new WP_Query(
    array(
            'posts_per_page' => -1,
            'post_type' => 'portfolio',
            'order' => 'ASC'
            )
    ); ?>

    <?php if ( $onePageQuery->have_posts() ) : ?>

      	<div class="pieces-all-contain">
        <?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
					
						<div class="individual-piece-container">
							<h2><?php the_title(); ?></h2>
		                <div class="image">
		                		<a target="_blank" href="<?php the_field('portfolio_link') ?>"><?php $image = get_field('portfolio_image'); ?>
		                    <img class="images" src="<?php echo $image['sizes']['large'] ?>" alt="Picture of Portfolio Piece"></a>
                		</div>
		               <?php the_content(); ?>
						</div>

        <?php endwhile; ?>
		
        <?php wp_reset_postdata(); ?>
        	</div>
    <?php else:  ?>
        [stuff that happens if there aren't any posts]
    <?php endif; ?>
    
	<div class="arrow">
		<a href="#about-contact-section"><i class="fa fa-angle-down"></i></i></a>
	</div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<div class="about-contact-section" id="about-contact-section">

		<div class="holler">
			<h2>HOLLER</h2>
		</div>

	<div class="about-contact-container">

	<article class="about">
			<p><span>I am a Graduate of HackerYou's full time immersive Web Development boot camp and am passionate about turning designs into reality using HTML5, CSS3, JavaScript and WordPress.</span></p>
			<p><span>I grew up in the Ottawa valley.</span></p> 
			<p><span>When I completed my BA in History, I moved to Toronto to start a band.</span></p>
			<p><span>Through music, I was able to travel across Canada from coast to coast.</span></p> 
			<p><span>These experiences have shaped my personality and my work.</span></p>
			<p><span><a class="email-link" href="mailto:rymclennan@gmail.com">rymclennan@gmail.com</a></span></p>
			<nav class="links">
		 			<?php wp_nav_menu( array(
		      	'container' => false,
		      	'theme_location' => 'social-links'
		    )); ?>
			</nav>
	</article>
		
	<div class="contact-form">
		<?php echo do_shortcode('[contact-form-7 id="47" title="Contact Me"]'); ?>
	</div>

	</div>
		<div class="arrow2">
			<a href="#home"><i class="fa fa-angle-up"></i></a>
		</div>
		
		<?php get_footer(); ?> 
	</div>


