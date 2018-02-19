<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

    <div class="wrap">

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <div class="home-container">
                    <a href="<?php echo bloginfo('url')?>/presentation/">
                        <div class="home-presentation">
                            <img class="points" src="<?php echo get_template_directory_uri() ?>/../myTheme/assets/images/points1.png" alt="presentation" />
                            <img class="presentation" src="<?php echo get_template_directory_uri() ?>/../myTheme/assets/images/qui.png" alt="presentation" />
                            <img class="points" src="<?php echo get_template_directory_uri() ?>/../myTheme/assets/images/points2.png" alt="presentation" />
                            <h1>Qui suis-je ?</h1>
                        </div>
                    </a>

                    <div class="home-sections">
                        <div>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/../myTheme/assets/images/formation1.png" alt="formation" />
                                <section class="home-formation">
                                    <h1>Ma formation</h1>
                                </section>
                            </a>

                            <a href="#">
                                <section class="home-experience">
                                    <h1>Mon expérience Pro</h1>
                                </section>
                            </a>
                        </div>

                        <div>
                            <a href="#">
                                <section class="home-interets">
                                    <h1>Mes hobbies</h1>
                                </section>
                            </a>

                            <a href="#">
                                <section class="home-realisations">
                                    <h1>Mes réalisations</h1>
                                </section>
                            </a>
                        </div>
                    </div>
                </div>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();
