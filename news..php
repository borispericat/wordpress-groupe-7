<?php
/*
Template Name: Gabarit actualité.
*/
?>
<?php get_header(); ?>



   <section><h1>Actualités</h1></section>
    <section class="news">
    <?php
    // boucle WordPress
    if (have_posts()){
      the_post();
    ?>
        <div class="news_thumbnail">
        
        <h2><?php the_permalink(); ?></h2>
            <div class="news_img">
                <img src="./img/logo_couleur.svg">
            </div>
            <p><?php the_content(); ?></p>
            <button>Lire l'article</button>
        </div>
        <?php
        }
        ?>
    </section>
    <?php get_footer(); ?>