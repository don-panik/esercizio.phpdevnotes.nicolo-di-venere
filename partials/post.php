<a class="card" href="post-routing-micro.html" aria-label="Apri articolo: Routing “micro” in PHP: una base pulita senza framework">
  <div class="feature">
    <?php the_post_thumbnail() ?>
    <div class="tag">🏷️ Architettura</div>
    <div class="date"><?php the_date(); ?> </div>
  </div>
  <div class="pad">
    <h3><?php the_title(); ?></h3>
    <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?></p>
    <div class="meta-line">
      <span class="chip">🕒 Lettura: 6 min</span>
      <span class="chip">🐘 PHP</span>
    </div>
    <hr class="sep" />
    <span class="btn primary">Leggi →</span>
  </div>
</a>

