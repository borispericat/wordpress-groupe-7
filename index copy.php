<?php get_header(); ?>


 
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
    <div class="card">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php
          the_post_thumbnail( 'hubThumbnail', array('class'=>'card-img-top probootstrap-animate') );
         ?>
      </a>
    </div>
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>
 </main> 

<?php get_footer(); ?>
