<?php
/*
Template Name: Gabarit proposition.
*/
?>
<?php get_header(); ?>
    <section class="news">
        <h1>Propositions</h1>

    </section>
    <section class="news">
        <div class="news_thumbnail">
        <?php
$args = array( 'post_type' => 'film' );

$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        if(has_post_thumbnail())
        {
          the_post_thumbnail( 'single_thumbnail');
        }
        echo '<h1>' . get_the_title() . '</h1>';

        the_field('realisateur_du_film');
        echo '<h2>Durée du film : '.get_field('duree_du_film').'</h2>';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    // no posts found
}
?>
        </div>
        <div class="news_thumbnail">
            <h2>Urbanisme</h2>
            <div class="news_img">
                <img src="./img/logo_couleur.svg">
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
            A hic dolore numquam, provident soluta vitae obcaecati accusamus<br>
            et at reprehenderit quidem deserunt nemo necessitatibus, <br>
            excepturi, in commodi? Eius, quasi sit.</p>
            <button>Lire l'article</button>
        </div>
        <div class="news_thumbnail">
            <h2>Société</h2>
            <div class="news_img">
                <img src="./img/logo_couleur.svg">
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
            A hic dolore numquam, provident soluta vitae obcaecati accusamus<br>
            et at reprehenderit quidem deserunt nemo necessitatibus, <br>
            excepturi, in commodi? Eius, quasi sit.</p>
            <button>Lire l'article</button>
        </div>
    </section>
    <?php get_footer(); ?>