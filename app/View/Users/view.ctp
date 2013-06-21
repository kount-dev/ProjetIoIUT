<?php 
		echo $this->Html->css('profile');
 ?>

<ul id="tabBar">
	<li id="challenge_tab" class="tab"><?php echo $this->Html->link(__('Challenges'), array('controller' => 'exercises','action' => 'listByUser')); ?></li>
	<li id="profile_tab" class="tab"><?php echo $this->Html->link(__('Profile'), array('controller' => 'users', 'action' => 'view')); ?> </li>
	<li id="leaderboard_tab" class="tab"><?php echo $this->Html->link(__('Leaderboard'), array('controller' => 'users', 'action' => 'leaderboard')); ?> </li>
</ul>
<div id="tabContent">
	<div class="users view">
	<h2><?php echo h($user['User']['username']); ?></h2>
		<div class="info"><span class="label">Email:</span> <?php echo h($user['User']['mail']); ?></div>
		<div class="info"><span class="label">Total Score:</span> <?php echo h($user['User']['xp']); ?></div>
		<div class="info"><span class="label">Actual Rank:</span> <?php echo h($user['User']['actual_rank']); ?></div>
		<div class="info"><span class="label">Group you are in:</span> <?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?></div>


		<dl style="display: none">
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
</div>
