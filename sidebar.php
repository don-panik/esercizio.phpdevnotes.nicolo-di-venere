
<aside class="panel">
<?php if (is_active_sidebar( 'sidebar-1' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
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