<div class="exercicesQuestions view">
<h2><?php  echo __('Exercices Question'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($exercicesQuestion['ExercicesQuestion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exercise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exercicesQuestion['Exercise']['name'], array('controller' => 'exercises', 'action' => 'view', $exercicesQuestion['Exercise']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exercicesQuestion['Question']['id'], array('controller' => 'questions', 'action' => 'view', $exercicesQuestion['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($exercicesQuestion['ExercicesQuestion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($exercicesQuestion['ExercicesQuestion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exercices Question'), array('action' => 'edit', $exercicesQuestion['ExercicesQuestion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exercices Question'), array('action' => 'delete', $exercicesQuestion['ExercicesQuestion']['id']), null, __('Are you sure you want to delete # %s?', $exercicesQuestion['ExercicesQuestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercices Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercices Question'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
