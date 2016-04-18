<!-- <div class="message error" onclick="this.classList.add('hidden');"><?= h($message) ?></div> -->

<div class="alert alert-danger" role="alert" onclick="this.classList.add('hidden');">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <?= h($message) ?>
</div>

