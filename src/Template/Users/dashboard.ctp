<h1 class="page-header">Dashboard</h1>

<div class="row">
	<?php foreach($users as $user): ?>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">
					<?php echo sprintf('%s %s', $user->first_name, $user->last_name); ?>
				</div>
			</div>
			<div class="panel-body">
				<ul>
				<?php foreach($user->tasks as $task): ?>	
					<li><?php echo $task->description ?></li>
				<?php endforeach ?>
				</ul>
			</div>
		</div>
	</div>
	<?php endforeach ?>
</div>