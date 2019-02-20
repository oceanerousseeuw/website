<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if (is_sticky() && is_home()) :
        echo twentyseventeen_get_svg(array('icon' => 'thumb-tack'));
    endif;
    ?>
    <header class="entry-header">
        <?php
        if (is_single()) {
            the_title('<h1 class="entry-title">', '</h1>');
        } elseif (is_front_page() && is_home()) {
            the_title('<h3 class="entry-title">', '</a></h3>');
        } else {
            the_title('<h2 class="entry-title">', '</a></h2>');
        }
        ?>
    </header><!-- .entry-header -->
    <?php global $wp;
    $url = get_site_url() . "/category/contactez-moi";
    if (home_url($wp->request) == $url): ?>
        <form method="post" type="submit" action="<?php sendMail() ?>">
            <div>
                <label for="lastname">Nom : <span class="required">*</span> </label>
                <input type="text" name="lastname" id="lastname" required="required"/>
            </div>
            <div>
                <label for="firstname">Prénom : <span class="required">*</span> </label>
                <input type="text" name="firstname" id="firstname" required="required"/>
            </div>
            <div>
                <label for="society">Société : </label>
                <input type="text" name="society" id="society"/>
            </div>
            <div>
                <label for="content_message">Votre message : <span class="required">*</span></label>
                <input type="text" name="content_message" id="content_message" required="required"/>
            </div>
            <input type="submit" value="Envoyer" onclick="displayAlert()"/>
        </form>
    <?php else: ?>
        <div class="content-post">
            <?php if ('' !== get_the_post_thumbnail() && !is_single()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div><!-- .post-thumbnail -->
            <?php endif; ?>

            <div class="entry-content">
                <?php
                /* translators: %s: Name of current post */
                the_content(sprintf(
                    __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen'),
                    get_the_title()
                ));

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . __('Pages:', 'twentyseventeen'),
                    'after' => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after' => '</span>',
                ));
                ?>
            </div><!-- .entry-content -->
        </div>

    <?php endif ?>
    <?php
    if (is_single()) {
        twentyseventeen_entry_footer();
    }
    ?>

</article><!-- #post-## -->

<script>
    function displayAlert(){
        alert("Message envoyé !");
    }
</script>