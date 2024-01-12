<div class="doc-code">
    <?php if ($symbol){echo '<code>$ </code>';} ?>
    <pre><code class="language-<?php if($language){echo $language;} else {echo "js";} ?>"><?php echo $text ?></code></pre>
    <div id="copy-btn" data-target="#copy-text" class="copy-btn">
        <img src="img/ic-copy.svg" alt="">
    </div>
</div>