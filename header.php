<?php ?> 
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PHP Dev Notes — Programmazione PHP</title>
  <meta name="description" content="Sito demo su programmazione PHP con blog di approfondimenti (statico HTML)." />
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml" />
  <?php wp_head(); ?>
</head>
<?php body_class(); ?>
<body>
  <header> 
  <div class="container nav">
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <span class="logo" aria-hidden="true">
        <svg viewBox="0 0 24 24">
          <path d="M4 5h16v14H4V5zm2 3v2h4V8H6zm0 4v2h8v-2H6z"/>
        </svg>
      </span>
      <div>
        <?php bloginfo( 'name' ); ?> <br/>
        <span class="sub"> <?php bloginfo( 'description' ) ?> </span>
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