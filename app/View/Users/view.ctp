<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($user['User']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Xp'); ?></dt>
		<dd>
			<?php echo h($user['User']['xp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actual Rank'); ?></dt>
		<dd>
			<?php echo h($user['User']['actual_rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Rank'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Avatar Namefile'); ?></dt>
		<dd>
			<?php echo h($user['User']['avatar_namefile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Group Lists'), array('controller' => 'group_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group List'), array('controller' => 'group_lists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultats'), array('controller' => 'resultats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultat'), array('controller' => 'resultats', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Exercises'); ?></h3>
	<?php if (!empty($user['Exercise'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Author'); ?></th>
		<th><?php echo __('Minimum Points'); ?></th>
		<th><?php echo __('Opening Date'); ?></th>
		<th><?php echo __('Closing Date'); ?></th>
		<th><?php echo __('Discipline Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Exercise'] as $exercise): ?>
		<tr>
			<td><?php echo $exercise['id']; ?></td>
			<td><?php echo $exercise['name']; ?></td>
			<td><?php echo $exercise['author']; ?></td>
			<td><?php echo $exercise['minimum_points']; ?></td>
			<td><?php echo $exercise['opening_date']; ?></td>
			<td><?php echo $exercise['closing_date']; ?></td>
			<td><?php echo $exercise['discipline_id']; ?></td>
			<td><?php echo $exercise['user_id']; ?></td>
			<td><?php echo $exercise['created']; ?></td>
			<td><?php echo $exercise['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'exercises', 'action' => 'view', $exercise['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'exercises', 'action' => 'edit', $exercise['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'exercises', 'action' => 'delete', $exercise['id']), null, __('Are you sure you want to delete # %s?', $exercise['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Group Lists'); ?></h3>
	<?php if (!empty($user['GroupList'])): ?>
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
		foreach ($user['GroupList'] as $groupList): ?>
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
<div class="related">
	<h3><?php echo __('Related Resultats'); ?></h3>
	<?php if (!empty($user['Resultat'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Namefile'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Exercise Id'); ?></th>
		<th><?php echo __('Attempt Number'); ?></th>
		<th><?php echo __('Success Rate'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Resultat'] as $resultat): ?>
		<tr>
			<td><?php echo $resultat['id']; ?></td>
			<td><?php echo $resultat['namefile']; ?></td>
			<td><?php echo $resultat['user_id']; ?></td>
			<td><?php echo $resultat['exercise_id']; ?></td>
			<td><?php echo $resultat['attempt_number']; ?></td>
			<td><?php echo $resultat['success_rate']; ?></td>
			<td><?php echo $resultat['created']; ?></td>
			<td><?php echo $resultat['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'resultats', 'action' => 'view', $resultat['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'resultats', 'action' => 'edit', $resultat['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'resultats', 'action' => 'delete', $resultat['id']), null, __('Are you sure you want to delete # %s?', $resultat['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Resultat'), array('controller' => 'resultats', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
