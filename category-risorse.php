<?php get_header(); ?>
<main class="container">
<div class="breadcrumb">
      <a href="index.html">Home</a> <span>›</span> <span>Risorse</span>
    </div>
    <h2 class="section-title"> <?php echo single_cat_title(); ?> </h2>
    <p class="muted" style="margin-top:0"> <?php echo category_description(); ?> </p>
    <div class="grid" aria-label="Ultimi articoli">
   
    <?php if (have_posts()): ?>
        
            <?php
            while (have_posts() ) : the_post();
            get_template_part('partials/risorse');
            endwhile;
            ?>
        

    <?php else : ?>
        <p>Nessun articolo pubblicato</p>
    <?php endif; ?>
    
     <hr class="sep" />

     </div>
     
  </main>

<?php get_footer(); ?>