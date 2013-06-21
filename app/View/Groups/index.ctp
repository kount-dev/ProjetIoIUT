<?php 
		echo $this->Html->css('admin');
		echo $this->Html->css('group');
 ?>
<div id="actionBar">
	<?php echo $this->Html->link(null, array('action' => 'add'), array('class' => 'action_btn new')); ?>
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
	<div class="groups index">
		<div id="group_list">
			<?php foreach ($groups as $group): ?>
			<div class="group">
				<span class="infos">
					Created on
					<span class="date"><?php echo h($group['Group']['created']); ?></span>
				</span>
				<h3 class="title"><?php echo h($group['Group']['name']); ?></h3>
				<div class="actions">
					<?php echo $this->Form->postLink(__('Edit'), array('action' => 'edit', $group['Group']['id']), array('class' => 'btn'));?>
					<?php echo $this->Html->link(__('Delete'), array('action' => 'delete', $group['Group']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<!-- <h2><?php echo __('Groups'); ?></h2>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('name'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th><?php echo $this->Paginator->sort('modified'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($groups as $group): ?>
		<tr>
			<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
			<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
			<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
			<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table> -->
	</div>
</div>