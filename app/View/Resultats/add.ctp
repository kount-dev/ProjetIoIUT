<div class="resultats form">
<?php echo $this->Form->create('Resultat'); ?>
	<fieldset>
		<legend><?php echo __('Add Resultat'); ?></legend>
	<?php
		echo $this->Form->input('namefile');
		echo $this->Form->input('user_id');
		echo $this->Form->input('exercise_id');
		echo $this->Form->input('numero_tentative');
		echo $this->Form->input('date_envoie');
		echo $this->Form->input('taux_reussite');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Resultats'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
	</ul>
</div>
