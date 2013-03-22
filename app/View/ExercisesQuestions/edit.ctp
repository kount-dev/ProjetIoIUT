<div class="exercisesQuestions form">
<?php echo $this->Form->create('ExercisesQuestion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Exercises Question'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('exercise_id');
		echo $this->Form->input('question_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ExercisesQuestion.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ExercisesQuestion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Exercises Questions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
