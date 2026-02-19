<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contatti — PHP Dev Notes</title>
  <meta name="description" content="Contatti e segnalazioni (demo)." />
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php get_header(); ?>

  <main class="container">
    <div class="breadcrumb">
      <a href="index.html">Home</a> <span>›</span> <span>Contatti</span>
    </div>

    <h2 class="section-title">Contatti</h2>
    <p class="muted" style="margin-top:0">Sito statico: il form usa <em>mailto</em>.</p>

    <div class="grid">
      <div class="card">
        <div class="pad">
          <h3>Scrivi</h3>
          <p class="muted">Segnalazioni, correzioni, nuove idee di articoli.</p>
          <div class="meta-line">
            <a class="chip" href="mailto:info@phpdevnotes.test?subject=Contatto%20dal%20sito">✉️ info@phpdevnotes.test</a>
            <span class="chip">🧪 demo</span>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="pad">
          <h3>Messaggio rapido</h3>
          <form action="mailto:info@phpdevnotes.test" method="post" enctype="text/plain">
            <div>
              <label for="nome">Nome</label>
              <input id="nome" name="Nome" placeholder="Es. Studente" />
            </div>
            <div>
              <label for="tema">Tema</label>
              <input id="tema" name="Tema" placeholder="Es. PDO / Routing / Composer" />
            </div>
            <div>
              <label for="messaggio">Messaggio</label>
              <textarea id="messaggio" name="Messaggio" placeholder="Scrivi qui..."></textarea>
            </div>
            <button class="btn primary" type="submit">Apri email →</button>
          </form>
        </div>
      </div>

      <div class="card">
        <div class="pad">
          <h3>Nota didattica</h3>
          <p class="muted">Questa pagina è un buon esempio di page con form. In WP potete usare un plugin o un blocco.</p>
          <div class="meta-line"><span class="chip">WP</span><span class="chip">Template</span></div>
        </div>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>
</body>
</html>