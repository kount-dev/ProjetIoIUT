<div>
    <ul id="tabBar">
        <li id="admin_challenge_tab" class="tab"><?php echo $this->Html->link(__('Challenges'), array('controller' => 'exercises', 'action' => 'index')); ?></li>
        <li id="admin_users_tab" class="tab"><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
        <li id="admin_questions_tab" class="tab"><?php echo $this->Html->link(__('Questions'), array('controller' => 'questions', 'action' => 'index')); ?></li>
        <li id="admin_disciplines_tab" class="tab"><?php echo $this->Html->link(__('Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?></li>
        <li id="admin_typequestions_tab" class="tab"><?php echo $this->Html->link(__('Questions Type'), array('controller' => 'questionTypes', 'action' => 'index')); ?></li>
        <li id="admin_groupuser_tab" class="tab"><?php echo $this->Html->link(__('Groups User'), array('controller' => 'groups', 'action' => 'index')); ?></li>
		<li id="admin_groupiut_tab" class="tab"><?php echo $this->Html->link(__('Groups IUT'), array('controller' => 'iutgroups', 'action' => 'index')); ?></li>		
    </ul>
</div>
<div>
    <ul>
        <li class="tab"><?php echo $this->Html->link(__('New Iut Groups'), array('action' => 'add')); ?></li>
        <li class="tab"><?php echo $this->Html->link(__('List Iut Groups'), array('action' => 'index')); ?> </li>
    </ul>
</div>
<div class="iutGroups view">
<h2><?php  echo __('Iut Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($iutGroup['IutGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($iutGroup['IutGroup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($iutGroup['IutGroup']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($iutGroup['IutGroup']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>