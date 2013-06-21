<?php 
		echo $this->Html->css('admin');
		echo $this->Html->css('iutgroup');
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
	<div class="iutGroups index">
		<div id="iutgroup_list">
			<?php foreach ($iutGroups as $iutGroup): ?>
			<div class="iutgroup">
				<span class="infos">
					Created on
					<span class="date"><?php echo h($iutGroup['IutGroup']['created']); ?></span>
				</span>
				<h3 class="title"><?php echo h($iutGroup['IutGroup']['name']); ?></h3>
				<div class="actions">
					<?php echo $this->Form->postLink(__('Edit'), array('action' => 'edit', $iutGroup['IutGroup']['id']), array('class' => 'btn'));?>
					<?php echo $this->Html->link(__('Delete'), array('action' => 'delete', $iutGroup['IutGroup']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $iutGroup['IutGroup']['id'])); ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
<!-- 		<h2><?php echo __('Iut Groups'); ?></h2>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('name'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th><?php echo $this->Paginator->sort('modified'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($iutGroups as $iutGroup): ?>
		<tr>
			<td><?php echo h($iutGroup['IutGroup']['id']); ?>&nbsp;</td>
			<td><?php echo h($iutGroup['IutGroup']['name']); ?>&nbsp;</td>
			<td><?php echo h($iutGroup['IutGroup']['created']); ?>&nbsp;</td>
			<td><?php echo h($iutGroup['IutGroup']['modified']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $iutGroup['IutGroup']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $iutGroup['IutGroup']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $iutGroup['IutGroup']['id']), null, __('Are you sure you want to delete # %s?', $iutGroup['IutGroup']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table> -->
	</div>
</div>