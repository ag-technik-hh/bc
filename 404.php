		<?php get_header(); ?>

		<div id="container" role="main">
			<div id="full">
				<figure class="post-image full-image">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/404.jpg" alt="Diese Seite existiert nicht. Bitte nutzen Sie die Menüs oder die Suchfunktion." /></a>
				</figure>
				<section id="post-404">
					<hgroup class="header">
						<h2 class="post-title"><?php _e('404','scapegoat'); ?></h2>
					</hgroup>
				
				</section>
			</div><!-- full -->

			<div class="clear"></div>
		</div><!-- container -->

		<?php get_footer(); ?>