<?php get_header(); ?>


	<div id="banner-image-container">
        <?php if ( is_active_sidebar( 'home_banner' ) ) : ?>
            <?php dynamic_sidebar( 'home_banner'); ?>
        <?php else: ?>
            <a href="<?php echo site_url();?>"><img id="banner-image" src="<?php echo get_template_directory_uri(); ?>/images/banner.png"></a>
        <?php endif; ?>
    </div>

	<div id="main-container">

		<div id="content-post">
			<?php
            while ( have_posts() ) : the_post(); ?>
				<section class="col-8 col-md-8">
					<div class="post">
                        <div class="post-content">
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </div>

                        <div id="subtitle"><p>Submitted by <?php the_author(); ?> on <?php echo get_the_date(); ?> </p></div>

					</div>
				</section>

			<?php endwhile; ?>
		</div>

		<div id="sidebar">
            <aside class="col-4 col-md-4 " id="billboard">
                <a href="https://www.facebook.com/ece.club.7"><img class="shadowed hidden-sm hidden-xs" id="discussion-sticker" src="<?php echo get_template_directory_uri(); ?>/images/discussion_board_sticker.png" alt="to the discussion board"></a>
                <?php get_sidebar(); ?> 
            </aside>
		</div>


	</div>



	
</div>


<?php get_footer(); ?>