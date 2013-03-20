<div class="exercicesDisciplines form">
<?php echo $this->Form->create('ExercicesDiscipline'); ?>
	<fieldset>
		<legend><?php echo __('Edit Exercices Discipline'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('exercise_id');
		echo $this->Form->input('discipline_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ExercicesDiscipline.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ExercicesDiscipline.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Exercices Disciplines'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
	</ul>
</div>
