<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PHP Dev Notes — Programmazione PHP</title>
  <meta name="description" content="Sito demo su programmazione PHP con blog di approfondimenti (statico HTML)." />
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml" />
  <?php wp_head(); ?>
</head>
<body>
  <header>
  <div class="container nav">
    <a class="brand" href="index.html" aria-label="Home PHP Dev Notes">
      <span class="logo" aria-hidden="true">
        <svg viewBox="0 0 24 24">
          <path d="M4 5h16v14H4V5zm2 3v2h4V8H6zm0 4v2h8v-2H6z"/>
        </svg>
      </span>
      <div>
        PHP DEV NOTES<br/>
        <span class="sub">programmazione PHP · blog tecnico (demo)</span>
      </div>
    </a>

    <nav class="navlinks" aria-label="Menu"> 
    <?php
       wp_nav_menu( array(
         'theme_location' => 'primary',
         'container'      => false,
         'fallback_cb'    => false,
         'items_wrap'     => '%3$s', // niente <ul>, usiamo direttamente i <a> (lo stile li prende lo stesso)
       ) );
       ?>
    </nav>
  </div>
</header>