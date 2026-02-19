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