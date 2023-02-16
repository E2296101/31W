<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h4 class="page-title"><?php esc_html_e( 'Oops! Page introuvable.', 'theme-textdomain' ); ?></h4>
			</header><!-- .page-header -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
