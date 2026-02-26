<a class="card" href="<?php the_permalink(); ?>" aria-label="Apri articolo: Routing “micro” in PHP: una base pulita senza framework">
  <div class="feature">
    <?php the_post_thumbnail() ?>
    <div class="tag">
    <?php $posttags = get_the_tags(); 
    if ($posttags) {
      foreach($posttags as $tag) {
        echo '🏷️ '. $tag->name.' ';
      }
    } 
    ?>
    
    </div>
    <div class="date"><?php the_date(); ?> </div>
  </div>
  <div class="pad">
    <h3><?php the_title(); ?></h3>
    <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?></p>
    <div class="meta-line">
      <span class="chip">🕒 Lettura:<?php echo (int) ( strlen(get_the_content())/50 )  ?> minuti</span>
      <span class="chip">🐘 PHP</span>
      <!--span class="chip"><?php $posttags = get_the_category(); 
    if ($posttags) {
      foreach($posttags as $tag) {
        echo $tag->name.' ';
      }
    } 
    ?>

      </span-->
    </div>
    <hr class="sep" />
    <span class="btn primary">Leggi →</span>
  </div>
</a>

