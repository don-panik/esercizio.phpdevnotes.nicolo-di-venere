<div class="card">
        <div class="pad">
          <h3><?php the_title(); ?></h3>
          <p class="muted"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?></p>
          <pre><code><span class="tok-kw">&lt;?php</span>
<span class="tok-kw">function</span> <span class="tok-fn">dd</span>(<span class="tok-var">$value</span>): <span class="tok-kw">void</span> {
    <span class="tok-kw">echo</span> <span class="tok-str">'&lt;pre&gt;'</span>;
    <span class="tok-fn">var_dump</span>(<span class="tok-var">$value</span>);
    <span class="tok-kw">echo</span> <span class="tok-str">'&lt;/pre&gt;'</span>;
    <span class="tok-kw">exit</span>;
}</code></pre>
        </div>
      </div>