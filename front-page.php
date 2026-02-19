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
          <a class="btn" href="snippets.html">Snippet pronti</a>
          <a class="btn" href="contatti.html">Contatti</a>
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
    <div class="grid" aria-label="Ultimi articoli">
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