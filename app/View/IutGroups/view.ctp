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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Iut Group'), array('action' => 'edit', $iutGroup['IutGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Iut Group'), array('action' => 'delete', $iutGroup['IutGroup']['id']), null, __('Are you sure you want to delete # %s?', $iutGroup['IutGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Iut Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iut Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Group Lists'), array('controller' => 'group_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group List'), array('controller' => 'group_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Group Lists'); ?></h3>
	<?php if (!empty($iutGroup['GroupList'])): ?>
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
		foreach ($iutGroup['GroupList'] as $groupList): ?>
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
