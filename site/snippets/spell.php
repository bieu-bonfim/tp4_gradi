<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  The note snippet renders an excerpt of a blog article.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<article class="note-excerpt">
  <a href="<?= $spell->url() ?>">
    <header>
      <h2 class="note-excerpt-title"><?= $spell->title()->esc() ?></h2>
      <p class="note-excerpt-subheading"><small>Level <?= $spell->level() ?> <?= $spell->school() ?> spell</small></p>
      <p class="note-excerpt-subheading"><small><?= $spell->components() ?></small></p>
    </header>
  </a>
</article>
