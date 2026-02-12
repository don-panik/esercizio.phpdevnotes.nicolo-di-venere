<?php get_header(); ?>

<main class="container">
    <h2 class="section-title">Ultimi approfondimenti</h2>
    <p class="muted" style="margin-top:0">Articoli con esempi di codice (senza JS).</p>
    <div class="grid" aria-label="Ultimi articoli">
   
    <?php if (have_posts()): ?>
        
            <?php
            while (have_posts() ) : the_post();
            get_template_part('partials/post');
            endwhile;
            ?>
        

    <?php else : ?>
        <p>Nessun articolo pubblicato</p>
    <?php endif; ?>
    
     <hr class="sep" />

     </div>
     
  </main>

<?php get_footer(); ?>