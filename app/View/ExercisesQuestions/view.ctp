<div class="exercisesQuestions view">
<h2><?php  echo __('Exercises Question'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($exercisesQuestion['ExercisesQuestion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exercise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exercisesQuestion['Exercise']['name'], array('controller' => 'exercises', 'action' => 'view', $exercisesQuestion['Exercise']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exercisesQuestion['Question']['id'], array('controller' => 'questions', 'action' => 'view', $exercisesQuestion['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($exercisesQuestion['ExercisesQuestion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($exercisesQuestion['ExercisesQuestion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exercises Question'), array('action' => 'edit', $exercisesQuestion['ExercisesQuestion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exercises Question'), array('action' => 'delete', $exercisesQuestion['ExercisesQuestion']['id']), null, __('Are you sure you want to delete # %s?', $exercisesQuestion['ExercisesQuestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercises Question'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
