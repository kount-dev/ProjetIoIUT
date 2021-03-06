<?php 
		echo $this->Html->css('admin');
		echo $this->Html->css('profile');
 ?>
<div id="actionBar">
	<?php echo $this->Html->link(null, array('controller' => 'users', 'action' => 'index'), array('class' => 'action_btn list')); ?>
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
	<div class="users generation form">
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
			<legend><?php echo __('Add User'); ?></legend>
		<?php
			echo $this->Form->input('username');
			echo $this->Form->input('password');
			echo $this->Form->input('mail');
			echo $this->Form->input('xp',array('value' => 0));
			echo $this->Form->input('actual_rank');
			echo $this->Form->input('last_rank');
			echo $this->Form->input('group_id');
			echo $this->Form->input('IutGroup',
	                                array('label'=>'Groups IUT',
	                                      'type'=>'select',
	                                      'multiple'=>true,
	                                      'options' => $iutgroups));
			echo $this->Form->input('avatar_namefile');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>
