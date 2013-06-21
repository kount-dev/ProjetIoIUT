<?php 
		echo $this->Html->css('admin');
		echo $this->Html->css('profile');
 ?>
<div id="actionBar">
	<?php echo $this->Html->link(null, array('controller' => 'users', 'action' => 'add'), array('class' => 'action_btn new')); ?>
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
	<div class="users index">
		<div id="user_list">
			<?php foreach ($users as $user): ?>
			<div class="user">
				<span class="infos">
					Created on
					<span class="date"><?php echo h($user['User']['created']); ?></span>
				</span>
				<h3 class="title"><?php echo h($user['User']['username']); ?></h3>
				<div class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']), array('class' => 'btn')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
					<?php echo $this->Html->link(__('Answers'), array('controller' => 'answers','action' => 'displayByIdUser', $user['User']['id']), array('class' => 'btn')); ?>
				</div>
				<div class="descr">
					<p><?php echo h($user['User']['mail']); ?></p>
					<p>Have <?php echo h($user['User']['xp']); ?> xp</p>
					<p>Is ranked <?php echo h($user['User']['actual_rank']); ?></p>
					<p>Group: <?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<!-- <table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('username'); ?></th>
				<th><?php echo $this->Paginator->sort('password'); ?></th>
				<th><?php echo $this->Paginator->sort('mail'); ?></th>
				<th><?php echo $this->Paginator->sort('xp'); ?></th>
				<th><?php echo $this->Paginator->sort('actual_rank'); ?></th>
				<th><?php echo $this->Paginator->sort('last_rank'); ?></th>
				<th><?php echo $this->Paginator->sort('group_id'); ?></th>
				<th><?php echo $this->Paginator->sort('avatar_namefile'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th><?php echo $this->Paginator->sort('modified'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($users as $user): ?>
		<tr>
			<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['mail']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['xp']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['actual_rank']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['last_rank']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			</td>
			<td><?php echo h($user['User']['avatar_namefile']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
				<?php echo $this->Html->link(__('Answers'), array('controller' => 'answers','action' => 'displayByIdUser', $user['User']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table> -->
	</div>
</div>
