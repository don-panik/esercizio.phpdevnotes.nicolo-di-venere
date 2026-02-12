<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Snippets — PHP Dev Notes</title>
  <meta name="description" content="Snippet PHP pronti (demo), utili per esercizi." />
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml" />
  <link rel="stylesheet" href="css/style.css" />
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
      <a class="" href="index.html">Home</a><a class="" href="blog.html">Approfondimenti</a><a class="active" href="snippets.html">Snippets</a><a class="" href="risorse.html">Risorse</a><a class="" href="contatti.html">Contatti</a>
    </nav>
  </div>
</header>

  <main class="container">
    <div class="breadcrumb">
      <a href="index.html">Home</a> <span>›</span> <span>Snippets</span>
    </div>

    <h2 class="section-title">Snippets</h2>
    <p class="muted" style="margin-top:0">Copiabili e commentati (statico: niente highlight automatico).</p>

    <div class="grid">
      <div class="card">
        <div class="pad">
          <h3>Dump &amp; die</h3>
          <p class="muted">Helper minimale per debug durante gli esercizi.</p>
          <pre><code><span class="tok-kw">&lt;?php</span>
<span class="tok-kw">function</span> <span class="tok-fn">dd</span>(<span class="tok-var">$value</span>): <span class="tok-kw">void</span> {
    <span class="tok-kw">echo</span> <span class="tok-str">'&lt;pre&gt;'</span>;
    <span class="tok-fn">var_dump</span>(<span class="tok-var">$value</span>);
    <span class="tok-kw">echo</span> <span class="tok-str">'&lt;/pre&gt;'</span>;
    <span class="tok-kw">exit</span>;
}</code></pre>
        </div>
      </div>

      <div class="card">
        <div class="pad">
          <h3>Sanitizzazione base</h3>
          <p class="muted">Pulizia input (da adattare al contesto).</p>
          <pre><code><span class="tok-kw">&lt;?php</span>
<span class="tok-var">$name</span> = <span class="tok-fn">trim</span>(<span class="tok-var">$_POST</span>[<span class="tok-str">'name'</span>] ?? <span class="tok-str">''</span>);
<span class="tok-var">$name</span> = <span class="tok-fn">mb_substr</span>(<span class="tok-var">$name</span>, 0, 80);

<span class="tok-var">$age</span> = (int)(<span class="tok-var">$_POST</span>[<span class="tok-str">'age'</span>] ?? 0);
<span class="tok-kw">if</span> (<span class="tok-var">$age</span> &lt; 0) { <span class="tok-var">$age</span> = 0; }</code></pre>
        </div>
      </div>

      <div class="card">
        <div class="pad">
          <h3>Template view</h3>
          <p class="muted">Include di una view con variabili “estratte”.</p>
          <pre><code><span class="tok-kw">&lt;?php</span>
<span class="tok-kw">function</span> <span class="tok-fn">view</span>(<span class="tok-var">$name</span>, <span class="tok-var">$data</span> = []): <span class="tok-kw">string</span> {
    <span class="tok-fn">extract</span>(<span class="tok-var">$data</span>);
    <span class="tok-fn">ob_start</span>();
    <span class="tok-fn">require</span> __DIR__ . <span class="tok-str">"/views/{$name}.php"</span>;
    <span class="tok-kw">return</span> <span class="tok-fn">ob_get_clean</span>();
}</code></pre>
        </div>
      </div>
    </div>
  </main>

  <footer>
  <div class="container">
    <div class="small">
      <strong>PHP Dev Notes</strong> (demo) — Contenuti per esercitazione ·
      <a href="mailto:info@phpdevnotes.test">info@phpdevnotes.test</a>
    </div>
    <div class="small" style="margin-top:8px">
      © 2026 PHP Dev Notes. Sito statico HTML+CSS (senza JavaScript).
    </div>
  </div>
</footer>
</body>
</html>