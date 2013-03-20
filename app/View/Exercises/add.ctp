<div class="exercises form">
<?php echo $this->Form->create('Exercise'); ?>
	<fieldset>
		<legend><?php echo __('Add Exercise'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('author');
		echo $this->Form->input('minimum_points');
		echo $this->Form->input('opening_date');
		echo $this->Form->input('closing_date');
		echo $this->Form->input('discipline_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Exercises'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercices Disciplines'), array('controller' => 'exercices_disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercices Discipline'), array('controller' => 'exercices_disciplines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercices Questions'), array('controller' => 'exercices_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercices Question'), array('controller' => 'exercices_questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultats'), array('controller' => 'resultats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultat'), array('controller' => 'resultats', 'action' => 'add')); ?> </li>
	</ul>
</div>
