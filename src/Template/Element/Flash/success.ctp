<!-- <div class="message success" onclick="this.classList.add('hidden')"><?= h($message) ?></div> -->
<div class="alert alert-success" role="alert" onclick="this.classList.add('hidden');">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
  <span class="sr-only">Success:</span>
  <?= h($message) ?>
</div>