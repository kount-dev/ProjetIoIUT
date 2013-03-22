<div class="exercisesDisciplines view">
<h2><?php  echo __('Exercises Discipline'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($exercisesDiscipline['ExercisesDiscipline']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exercise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exercisesDiscipline['Exercise']['name'], array('controller' => 'exercises', 'action' => 'view', $exercisesDiscipline['Exercise']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discipline'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exercisesDiscipline['Discipline']['name'], array('controller' => 'disciplines', 'action' => 'view', $exercisesDiscipline['Discipline']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($exercisesDiscipline['ExercisesDiscipline']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($exercisesDiscipline['ExercisesDiscipline']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exercises Discipline'), array('action' => 'edit', $exercisesDiscipline['ExercisesDiscipline']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exercises Discipline'), array('action' => 'delete', $exercisesDiscipline['ExercisesDiscipline']['id']), null, __('Are you sure you want to delete # %s?', $exercisesDiscipline['ExercisesDiscipline']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises Disciplines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercises Discipline'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
	</ul>
</div>
