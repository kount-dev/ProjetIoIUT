<?php 
        echo $this->Html->css('admin');
        echo $this->Html->css('challenge');
 ?>
<div id="actionBar">
    <?php echo $this->Html->link(null, array('controller' => 'exercises', 'action' => 'index'), array('class' => 'action_btn list')); ?>
    <?php echo $this->Html->link(null, array('controller' => 'exercises', 'action' => 'import'), array('class' => 'action_btn import')); ?>
    <?php echo $this->Html->link(null, array('controller' => 'answers', 'action' => 'index'), array('class' => 'action_btn answer')); ?>
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
	<div class="exercises generation form">
	<?php echo $this->Form->create('Exercise'); ?>
		<fieldset>
			<legend><?php echo __('Edit Exercise'); ?></legend>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name');
			echo $this->Form->input('minimum_points');
			echo $this->Form->input('opening_date');
			echo $this->Form->input('closing_date');
			echo $this->Form->input('user_id');
			echo $this->Form->input('Discipline');
			echo $this->Form->input('IutGroup',
	                                array('label'=>'Groups IUT',
	                                      'type'=>'select',
	                                      'multiple'=>true,
	                                      'options' => $iutgroups));
			echo $this->Form->input('Question');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
	</div>
</div>