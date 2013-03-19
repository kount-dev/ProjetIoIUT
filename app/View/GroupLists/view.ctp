<div class="groupLists view">
<h2><?php  echo __('Group List'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($groupList['GroupList']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($groupList['User']['id'], array('controller' => 'users', 'action' => 'view', $groupList['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iut Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($groupList['IutGroup']['name'], array('controller' => 'iut_groups', 'action' => 'view', $groupList['IutGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($groupList['GroupList']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($groupList['GroupList']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group List'), array('action' => 'edit', $groupList['GroupList']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group List'), array('action' => 'delete', $groupList['GroupList']['id']), null, __('Are you sure you want to delete # %s?', $groupList['GroupList']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Group Lists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group List'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Iut Groups'), array('controller' => 'iut_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iut Group'), array('controller' => 'iut_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
