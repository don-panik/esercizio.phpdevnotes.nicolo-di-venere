<?php get_header(); ?>

  <section class="hero" aria-label="Hero">
    <div class="container wrap">
      <div>
        <div class="kicker"><span class="dot" aria-hidden="true"></span> Appunti pratici + esempi commentati</div>
        <h1>Imparare PHP facendo: <code>route()</code>, PDO, Composer.</h1>
        <p class="lead">
          Base didattica: home, archivio articoli, pagine singole e sezione snippet.
          Perfetto per convertirlo in tema WordPress “classico”.
        </p>
        <div class="actions">
          <a class="btn primary" href="<?php echo esc_url( home_url( '/category/approfondimenti/' ) ); ?>">Vai agli approfondimenti</a>
          <a class="btn" href="<?php echo esc_url( home_url( '/category/snippets/' ) ); ?>">Snippet pronti</a>
          <a class="btn" href="<?php echo esc_url( home_url( '/page/contattaci' ) ); ?>">Contatti</a>
        </div>
      </div>

      <aside class="panel">
        <div class="pad">
          <div class="badge">Roadmap (demo)</div>
          <div class="muted" style="margin-top:10px">
            ✓ HTTP e routing<br/>
            ✓ PDO e query sicure<br/>
            ✓ Composer + autoload<br/>
            ✓ PSR-12 e best practice
          </div>
          <hr class="sep" />
          <div class="badge">Suggerimento</div>
          <p class="muted" style="margin:10px 0 0">
            Per gli studenti: convertite prima l’archivio blog, poi il singolo post, infine gli snippets.
          </p>
          
        </div>
      </aside>
    </div>
  </section>

  <main class="container">
    <h2 class="section-title">Ultimi approfondimenti</h2>
    <p class="muted" style="margin-top:0">Articoli con esempi di codice (senza JS).</p>
   
    <?php
      $query = new WP_Query( ['posts_per_page' => 3 , 'category_name'=>'approfondimenti'] );
      ?>

      <?php if ( $query->have_posts() ) : ?>
        <div class="grid" aria-label="Ultimi articoli">
          <?php 
          while ( $query->have_posts() ): $query->the_post(); 
             get_template_part('partials/post');
          endwhile; 
          ?>
        </div>
      <?php else : ?>
        <p>Nessun articolo pubblicato.</p>
      <?php endif; ?>
  

    
  </main>



  <?php get_footer(); ?>