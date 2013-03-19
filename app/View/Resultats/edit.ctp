<div class="resultats form">
<?php echo $this->Form->create('Resultat'); ?>
	<fieldset>
		<legend><?php echo __('Edit Resultat'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Resultat.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Resultat.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Resultats'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
	</ul>
</div>
