<?php get_header(); ?>

<?php
// ─── Compatibilità WordPress e CMS custom ───────────────────────────────────
// Se siamo in WordPress, usiamo il Loop; altrimenti usiamo variabili custom.
$is_wordpress = function_exists('have_posts');

if ($is_wordpress) {
    // ── WordPress Loop ──
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $post_title    = get_the_title();
            $post_date_raw = get_the_date('d/m/Y');
            $post_date_fmt = get_the_date('l j F Y');
            $post_time     = get_field('read_time') ?: '5 min'; // ACF o fallback
            $post_tag      = get_the_category()[0]->name ?? 'Articolo';
            $post_tag_icon = '🏷️';
            $post_chip     = '🐘 PHP'; // oppure un custom field
            $featured_img  = get_the_post_thumbnail_url(null, 'large') ?: 'assets/posts/default.svg';
            $featured_alt  = get_the_title();
            $post_content  = get_the_content();
            $post_excerpt  = get_the_excerpt();
            $post_url      = get_permalink();

            // Articoli correlati (stessa categoria)
            $cat_id  = get_the_category()[0]->term_id ?? 0;
            $related = get_posts([
                'category'       => $cat_id,
                'posts_per_page' => 3,
                'exclude'        => [get_the_ID()],
            ]);
        }
    }
} else {
    // ── CMS Custom / Standalone PHP ─────────────────────────────────────────
    // Passa i dati da un array, DB, o file JSON. Esempio con array statico:
    $article = $GLOBALS['current_article'] ?? [
        'title'        => 'Routing "micro" in PHP: una base pulita senza framework',
        'date_raw'     => '10/01/2026',
        'date_fmt'     => 'Sabato 10 gennaio 2026',
        'read_time'    => '6 min',
        'tag'          => 'Architettura',
        'tag_icon'     => '🏷️',
        'chip'         => '🐘 PHP',
        'featured_img' => 'assets/posts/routing.svg',
        'featured_alt' => 'Routing micro in PHP',
        'content'      => '
<p>Quando inizi un progetto didattico, spesso vuoi evitare un framework completo ma anche evitare un caos di file. Un micro-router ti dà struttura: URL → callback.</p>
<div class="callout">Obiettivo: separare <strong>routing</strong>, <strong>controller</strong> e <strong>view</strong> senza complicare tutto.</div>
<pre><code><span class="tok-kw">&lt;?php</span>
<span class="tok-com">// public/index.php</span>
<span class="tok-var">$routes</span> = [
  <span class="tok-str">\'\'</span>       =&gt; <span class="tok-kw">function</span>() { <span class="tok-kw">return</span> <span class="tok-fn">view</span>(\'home\'); },
  <span class="tok-str">\'/posts\'</span> =&gt; <span class="tok-kw">function</span>() { <span class="tok-kw">return</span> <span class="tok-fn">view</span>(\'blog\'); },
];</code></pre>
<p>Da qui puoi evolvere con parametri (es. /posts/123), middleware e classi controller. Poche regole, chiare.</p>',
        'excerpt'      => 'Da un unico index.php a una mappa rotte + controller.',
        'url'          => '#',
    ];

    $post_title    = $article['title'];
    $post_date_raw = $article['date_raw'];
    $post_date_fmt = $article['date_fmt'];
    $post_time     = $article['read_time'];
    $post_tag      = $article['tag'];
    $post_tag_icon = $article['tag_icon'];
    $post_chip     = $article['chip'];
    $featured_img  = $article['featured_img'];
    $featured_alt  = $article['featured_alt'];
    $post_content  = $article['content'];
    $post_excerpt  = $article['excerpt'];
    $post_url      = $article['url'];

    // Articoli correlati (array o query DB custom)
    $related = $GLOBALS['related_articles'] ?? [];
}
?>

<main class="container">

  <!-- Breadcrumb dinamico -->
  <div class="breadcrumb">
    <a href="<?= $is_wordpress ? home_url('/') : 'index.html' ?>">Home</a>
    <span>›</span>
    <a href="<?= $is_wordpress ? get_post_type_archive_link('post') : 'blog.html' ?>">Approfondimenti</a>
    <span>›</span>
    <span>Articolo</span>
  </div>

  <!-- Articolo principale -->
  <article class="article" aria-label="Articolo del blog">

    <div class="head">
      <div class="feature">
        <img
          src="<?= esc_url($featured_img) ?>"
          alt="<?= esc_attr('Immagine in evidenza: ' . $post_title) ?>"
        />
        <div class="tag"><?= esc_html($post_tag_icon . ' ' . $post_tag) ?></div>
        <div class="date"><?= esc_html($post_date_raw) ?></div>
      </div>
    </div>

    <div class="content">
      <h1><?= esc_html($post_title) ?></h1>

      <div class="meta-line">
        <span class="chip">📅 <?= esc_html($post_date_fmt) ?></span>
        <span class="chip">🕒 Lettura: <?= esc_html($post_time) ?></span>
        <span class="chip"><?= esc_html($post_chip) ?></span>
      </div>

      <hr class="sep" />

      <!-- Contenuto dell'articolo -->
      <div class="article-body">

        <?php
        // Mostra il div.callout solo nel post con slug "post-routing-micro"
        if ( get_post_field('post_name', get_the_ID()) === 'post-routing-micro' ) : ?>
          <div class="callout">Obiettivo: separare <strong>routing</strong>, <strong>controller</strong> e <strong>view</strong> senza complicare tutto.</div>
        <?php endif; ?>

        <?php
        // Il pre/code di ogni post va inserito nell'editor WordPress → appare qui
        the_content();
        ?>

      </div>

      <hr class="sep" />

      <div style="display:flex; gap:10px; flex-wrap:wrap">
        <a class="btn" href="<?= home_url('/category/approfondimenti/') ?>">← Torna al blog</a>
        <a class="btn primary" href="<?= $is_wordpress ? home_url('/category/snippets/') : 'snippets.html' ?>">Snippets →</a>
      </div>
    </div>

  </article>

  <!-- Articoli correlati -->
  <?php if (!empty($related)) : ?>
  <h2 class="section-title">Altri articoli</h2>
  <div class="grid" aria-label="Altri articoli">

    <?php foreach ($related as $rel) :

      // Normalizza i dati sia per WP che per CMS custom
      if ($is_wordpress) {
        $rel_title   = get_the_title($rel);
        $rel_url     = get_permalink($rel);
        $rel_img     = get_the_post_thumbnail_url($rel, 'medium') ?: 'assets/posts/default.svg';
        $rel_date    = get_the_date('d/m/Y', $rel);
        $rel_excerpt = get_the_excerpt($rel);
        $rel_tag     = get_the_category($rel->ID)[0]->name ?? '';
        $rel_tag_ico = '🏷️';
        $rel_time    = get_field('read_time', $rel->ID) ?: '5 min';
        $rel_chip    = '🐘 PHP';
      } else {
        $rel_title   = $rel['title']        ?? '';
        $rel_url     = $rel['url']          ?? '#';
        $rel_img     = $rel['featured_img'] ?? 'assets/posts/default.svg';
        $rel_date    = $rel['date_raw']     ?? '';
        $rel_excerpt = $rel['excerpt']      ?? '';
        $rel_tag     = $rel['tag']          ?? '';
        $rel_tag_ico = $rel['tag_icon']     ?? '🏷️';
        $rel_time    = $rel['read_time']    ?? '5 min';
        $rel_chip    = $rel['chip']         ?? '';
      }
    ?>

    <a class="card"
       href="<?= esc_url($rel_url) ?>"
       aria-label="Apri articolo: <?= esc_attr($rel_title) ?>">
      <div class="feature">
        <img
          src="<?= esc_url($rel_img) ?>"
          alt="Immagine articolo: <?= esc_attr($rel_title) ?>"
        />
        <div class="tag"><?= esc_html($rel_tag_ico . ' ' . $rel_tag) ?></div>
        <div class="date"><?= esc_html($rel_date) ?></div>
      </div>
      <div class="pad">
        <h3><?= esc_html($rel_title) ?></h3>
        <p><?= esc_html($rel_excerpt) ?></p>
        <div class="meta-line">
          <span class="chip">🕒 Lettura: <?= esc_html($rel_time) ?></span>
          <span class="chip"><?= esc_html($rel_chip) ?></span>
        </div>
        <hr class="sep" />
        <span class="btn primary">Leggi →</span>
      </div>
    </a>

    <?php endforeach; ?>

  </div>
  <?php endif; ?>

</main>

<?php get_footer(); ?>