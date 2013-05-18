<div class="answers view">
<h2><?php  echo __('Answer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($answer['Answer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Namefile'); ?></dt>
		<dd>
			<?php echo h($answer['Answer']['namefile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($answer['User']['id'], array('controller' => 'users', 'action' => 'view', $answer['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exercise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($answer['Exercise']['name'], array('controller' => 'exercises', 'action' => 'view', $answer['Exercise']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attempt Number'); ?></dt>
		<dd>
			<?php echo h($answer['Answer']['attempt_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Success Rate'); ?></dt>
		<dd>
			<?php echo h($answer['Answer']['success_rate']) . "%"; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($answer['Answer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($answer['Answer']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Answer'), array('action' => 'edit', $answer['Answer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Answer'), array('action' => 'delete', $answer['Answer']['id']), null, __('Are you sure you want to delete # %s?', $answer['Answer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
	</ul>
</div>
