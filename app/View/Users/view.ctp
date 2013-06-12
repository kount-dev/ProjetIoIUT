<?php 
		echo $this->Html->css('profile');
 ?>

<div class="users view">
<h2><?php echo h($user['User']['username']); ?></h2>
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
