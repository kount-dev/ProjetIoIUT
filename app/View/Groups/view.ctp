<div class="groups view">
<h2><?php  echo __('Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($group['Group']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($group['Group']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($group['Group']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Group Lists'), array('controller' => 'group_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group List'), array('controller' => 'group_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Group Lists'); ?></h3>
	<?php if (!empty($group['GroupList'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Iut Group Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($group['GroupList'] as $groupList): ?>
		<tr>
			<td><?php echo $groupList['id']; ?></td>
			<td><?php echo $groupList['user_id']; ?></td>
			<td><?php echo $groupList['iut_group_id']; ?></td>
			<td><?php echo $groupList['created']; ?></td>
			<td><?php echo $groupList['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'group_lists', 'action' => 'view', $groupList['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'group_lists', 'action' => 'edit', $groupList['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'group_lists', 'action' => 'delete', $groupList['id']), null, __('Are you sure you want to delete # %s?', $groupList['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Group List'), array('controller' => 'group_lists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
