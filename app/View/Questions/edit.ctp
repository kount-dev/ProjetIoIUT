<?php 
		echo $this->Html->css('admin');
		echo $this->Html->css('question');
 ?>
<div id="actionBar">
	<?php //echo $this->Html->link(null, array('controller' => 'questions', 'action' => 'add'), array('class' => 'action_btn new')); ?>
	<?php echo $this->Html->link(null, array('controller' => 'questions', 'action' => 'import'), array('class' => 'action_btn import')); ?>
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
	<?php echo $this->Html->script('editQuestions.ajax'); ?>
	<div class="questions generation form">
	<?php echo $this->Form->create('Question'); ?>
		<fieldset>
			<legend><?php echo __('Edit Question'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('namefile');
			echo $this->Form->input('points');
			echo $this->Form->input('difficulty');
			echo $this->Form->hidden('user_id');
			echo $this->Form->hidden('question_type_id');
			echo $this->Form->input('Discipline');
		?>
		</fieldset>
		<div id="edit_question"></div>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>