<?php 
		echo $this->Html->css('challenge');
 ?>

<div class="exercises form">
<?php echo $this->Form->create('Exercise'); ?>
	<fieldset>
		<legend><?php echo __('Add Exercise'); ?></legend>
	<?php
		echo $this->Form->input('name', array('label' => false, 'placeholder' => 'Name'));
		echo $this->Form->input('minimum_points', array('label' => false, 'placeholder' => 'Minimum Points'));
		// echo $this->Form->input('opening_date', array('label' => false, 'placeholder' => 'Name')););
		// echo $this->Form->input('closing_date', array('label' => false, 'placeholder' => 'Name')););
		// echo $this->Form->input('user_id', array('label' => false, 'placeholder' => 'Name')););
		// echo $this->Form->input('Discipline', array('label' => false, 'placeholder' => 'Name')););
		// echo $this->Form->input('Question', array('label' => false, 'placeholder' => 'Name')););
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Exercises'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultats'), array('controller' => 'resultats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultat'), array('controller' => 'resultats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->