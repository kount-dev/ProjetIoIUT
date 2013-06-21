<?php 
		echo $this->Html->css('admin');
		echo $this->Html->css('question_type');
 ?>
<div id="actionBar">
	<?php echo $this->Html->link(null, array('action' => 'index'), array('class' => 'action_btn list')); ?>
</div>
<ul id="tabBar">
	<li id="admin_challenge_tab" class="tab"><?php echo $this->Html->link(__('Challenges'), array('controller' => 'exercises', 'action' => 'index')); ?></li>
	<li id="admin_users_tab" class="tab"><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
	<li id="admin_questions_tab" class="tab"><?php echo $this->Html->link(__('Questions'), array('controller' => 'questions', 'action' => 'index')); ?></li>
	<li id="admin_disciplines_tab" class="tab"><?php echo $this->Html->link(__('Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?></li>
	<li id="admin_typequestions_tab" class="tab"><?php echo $this->Html->link(__('Questions Type'), array('controller' => 'questionTypes', 'action' => 'index')); ?></li>
	<li id="admin_groupuser_tab" class="tab"><?php echo $this->Html->link(__('Groups User'), array('controller' => 'groups', 'action' => 'index')); ?></li>
	<li id="admin_groupiut_tab" class="tab"><?php echo $this->Html->link(__('Groups IUT'), array('controller' => 'iutgroups', 'action' => 'index')); ?></li>		
</ul>
	<div id="tabContent">
	<div class="questionTypes generation form">
	<?php echo $this->Form->create('QuestionType'); ?>
		<fieldset>
			<legend><?php echo __('Add Question Type'); ?></legend>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('controller');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>