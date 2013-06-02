<div>
	<ul id="tabBar">
		<li id="admin_challenge_tab" class="tab"><?php echo $this->Html->link(__('Challenges'), array('controller' => 'exercises', 'action' => 'index')); ?></li>
		<li id="admin_users_tab" class="tab"><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
		<li id="admin_questions_tab" class="tab"><?php echo $this->Html->link(__('Questions'), array('controller' => 'questions', 'action' => 'index')); ?></li>
		<li id="admin_disciplines_tab" class="tab"><?php echo $this->Html->link(__('Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?></li>
		<li id="admin_typequestions_tab" class="tab"><?php echo $this->Html->link(__('Questions Type'), array('controller' => 'questionTypes', 'action' => 'index')); ?></li>
		<li id="admin_groupuser_tab" class="tab"><?php echo $this->Html->link(__('Groups User'), array('controller' => 'groups', 'action' => 'index')); ?></li>
	</ul>
</div>
<div>
	<ul>
		<li class="tab"><?php echo $this->Html->link(__('New Question Type'), array('action' => 'add')); ?></li>
		<li class="tab"><?php echo $this->Html->link(__('List Questions'), array('action' => 'index')); ?> </li>
	</ul>
</div>
<div class="questionTypes form">
<?php echo $this->Form->create('QuestionType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Question Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('controller');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
