<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package avasol
 */

get_header();
?>

    <section id="primary" class="content-area">
        <main tabindex="-1" id="main" class="site-main container">

			<?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'avasol' ), '<span>' . get_search_query() . '</span>' );
						?>
                    </h1>
                </header>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				avasol_pagination_links();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

        </main>
    </section>

<?php
get_footer();
