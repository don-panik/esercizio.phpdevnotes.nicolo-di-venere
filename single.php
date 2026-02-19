<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Routing “micro” in PHP: una base pulita senza framework — PHP Dev Notes</title>
  <meta name="description" content="Da un unico index.php a una mappa rotte + controller, mantenendo il progetto piccolo e leggibile." />
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php get_header(); ?>

  <main class="container">
    <div class="breadcrumb">
      <a href="index.html">Home</a> <span>›</span> <a href="blog.html">Approfondimenti</a> <span>›</span> <span>Articolo</span>
    </div>

    <article class="article" aria-label="Articolo del blog">
      <div class="head">
        <div class="feature">
          <img src="assets/posts/routing.svg" alt="Immagine in evidenza: Routing “micro” in PHP: una base pulita senza framework" />
          <div class="tag">🏷️ Architettura</div>
          <div class="date">10/01/2026</div>
        </div>
      </div>

      <div class="content">
        <h1>Routing “micro” in PHP: una base pulita senza framework</h1>
        <div class="meta-line">
          <span class="chip">📅 Sabato 10 gennaio 2026</span>
          <span class="chip">🕒 Lettura: 6 min</span>
          <span class="chip">🐘 PHP</span>
        </div>

        <hr class="sep" />

        <p>Quando inizi un progetto didattico, spesso vuoi evitare un framework completo ma anche evitare un caos di file. Un micro-router ti dà struttura: URL → callback.</p>
        <div class='callout'>Obiettivo: separare <strong>routing</strong>, <strong>controller</strong> e <strong>view</strong> senza complicare tutto.</div>
        <pre><code><span class="tok-kw">&lt;?php</span>
<span class="tok-com">// public/index.php</span>
<span class="tok-var">$routes</span> = [
  <span class="tok-str">'/'</span> =&gt; <span class="tok-kw">function</span>() { <span class="tok-kw">return</span> <span class="tok-fn">view</span>(<span class="tok-str">'home'</span>); },
  <span class="tok-str">'/posts'</span> =&gt; <span class="tok-kw">function</span>() { <span class="tok-kw">return</span> <span class="tok-fn">view</span>(<span class="tok-str">'blog'</span>); },
];</code></pre>
        <p>Da qui puoi evolvere con parametri (es. /posts/123), middleware e classi controller. Poche regole, chiare.</p>

        <hr class="sep" />

        <div style="display:flex; gap:10px; flex-wrap:wrap">
          <a class="btn" href="blog.html">← Torna al blog</a>
          <a class="btn primary" href="snippets.html">Snippets →</a>
        </div>
      </div>
    </article>

    <h2 class="section-title">Altri articoli</h2>
    <div class="grid" aria-label="Altri articoli">
      <a class="card" href="post-routing-micro.html" aria-label="Apri articolo: Routing “micro” in PHP: una base pulita senza framework">
  <div class="feature">
    <img src="assets/posts/routing.svg" alt="Immagine articolo: Routing “micro” in PHP: una base pulita senza framework" />
    <div class="tag">🏷️ Architettura</div>
    <div class="date">10/01/2026</div>
  </div>
  <div class="pad">
    <h3>Routing “micro” in PHP: una base pulita senza framework</h3>
    <p>Da un unico index.php a una mappa rotte + controller, mantenendo il progetto piccolo e leggibile.</p>
    <div class="meta-line">
      <span class="chip">🕒 Lettura: 6 min</span>
      <span class="chip">🐘 PHP</span>
    </div>
    <hr class="sep" />
    <span class="btn primary">Leggi →</span>
  </div>
</a>
<a class="card" href="post-pdo-prepared.html" aria-label="Apri articolo: PDO e prepared statements: la checklist anti-SQL injection">
  <div class="feature">
    <img src="assets/posts/pdo.svg" alt="Immagine articolo: PDO e prepared statements: la checklist anti-SQL injection" />
    <div class="tag">🏷️ Database</div>
    <div class="date">06/01/2026</div>
  </div>
  <div class="pad">
    <h3>PDO e prepared statements: la checklist anti-SQL injection</h3>
    <p>Connessione, query parametrizzate, fetch e gestione errori: un template pronto per gli esercizi.</p>
    <div class="meta-line">
      <span class="chip">🕒 Lettura: 5 min</span>
      <span class="chip">🐘 PHP</span>
    </div>
    <hr class="sep" />
    <span class="btn primary">Leggi →</span>
  </div>
</a>
<a class="card" href="post-composer-autoload.html" aria-label="Apri articolo: Composer e autoload: progetto ordinato, require zero">
  <div class="feature">
    <img src="assets/posts/composer.svg" alt="Immagine articolo: Composer e autoload: progetto ordinato, require zero" />
    <div class="tag">🏷️ Tooling</div>
    <div class="date">02/01/2026</div>
  </div>
  <div class="pad">
    <h3>Composer e autoload: progetto ordinato, require zero</h3>
    <p>PSR-4 e autoload: organizzare src/ come si fa nei progetti reali.</p>
    <div class="meta-line">
      <span class="chip">🕒 Lettura: 4 min</span>
      <span class="chip">🐘 PHP</span>
    </div>
    <hr class="sep" />
    <span class="btn primary">Leggi →</span>
  </div>
</a>
    </div>
  </main>

  
  <?php get_footer(); ?>
</body>
</html>