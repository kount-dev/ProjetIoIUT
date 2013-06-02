<div class="exercises view">
<h2><?php  echo __('Exercise'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minimum Points'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['minimum_points']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opening Date'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['opening_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closing Date'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['closing_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exercise['User']['id'], array('controller' => 'users', 'action' => 'view', $exercise['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>