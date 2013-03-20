<div class="exercicesDisciplines view">
<h2><?php  echo __('Exercices Discipline'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($exercicesDiscipline['ExercicesDiscipline']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exercise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exercicesDiscipline['Exercise']['name'], array('controller' => 'exercises', 'action' => 'view', $exercicesDiscipline['Exercise']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discipline'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exercicesDiscipline['Discipline']['name'], array('controller' => 'disciplines', 'action' => 'view', $exercicesDiscipline['Discipline']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($exercicesDiscipline['ExercicesDiscipline']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($exercicesDiscipline['ExercicesDiscipline']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exercices Discipline'), array('action' => 'edit', $exercicesDiscipline['ExercicesDiscipline']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exercices Discipline'), array('action' => 'delete', $exercicesDiscipline['ExercicesDiscipline']['id']), null, __('Are you sure you want to delete # %s?', $exercicesDiscipline['ExercicesDiscipline']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercices Disciplines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercices Discipline'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
	</ul>
</div>
