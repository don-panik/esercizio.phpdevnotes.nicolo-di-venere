<div class="card"><div class="pad">
        <h3><?php the_title(); ?></h3>
        <p class="muted"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?></p>
        <div class="meta-line"><?php $posttags = get_the_tags(); 
    if ($posttags) {
      foreach($posttags as $tag) {
        echo '<span class="chip">'. $tag->name. '</span>';
      } } ?></div>
      </div></div>


     