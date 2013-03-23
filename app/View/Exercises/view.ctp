<div class="exercises view">
<h2><?php  echo __('Exercise'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minimum Points'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['minimum_points']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Opening Date'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['opening_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closing Date'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['closing_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exercise['User']['id'], array('controller' => 'users', 'action' => 'view', $exercise['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exercise'), array('action' => 'edit', $exercise['Exercise']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exercise'), array('action' => 'delete', $exercise['Exercise']['id']), null, __('Are you sure you want to delete # %s?', $exercise['Exercise']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultats'), array('controller' => 'resultats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultat'), array('controller' => 'resultats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Resultats'); ?></h3>
	<?php if (!empty($exercise['Resultat'])): ?>
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
		foreach ($exercise['Resultat'] as $resultat): ?>
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
<div class="related">
	<h3><?php echo __('Related Disciplines'); ?></h3>
	<?php if (!empty($exercise['Discipline'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($exercise['Discipline'] as $discipline): ?>
		<tr>
			<td><?php echo $discipline['id']; ?></td>
			<td><?php echo $discipline['name']; ?></td>
			<td><?php echo $discipline['created']; ?></td>
			<td><?php echo $discipline['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'disciplines', 'action' => 'view', $discipline['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'disciplines', 'action' => 'edit', $discipline['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'disciplines', 'action' => 'delete', $discipline['id']), null, __('Are you sure you want to delete # %s?', $discipline['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Questions'); ?></h3>
	<?php if (!empty($exercise['Question'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Namefile'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Points'); ?></th>
		<th><?php echo __('Difficulty'); ?></th>
		<th><?php echo __('Question Type Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($exercise['Question'] as $question): ?>
		<tr>
			<td><?php echo $question['id']; ?></td>
			<td><?php echo $question['namefile']; ?></td>
			<td><?php echo $question['user_id']; ?></td>
			<td><?php echo $question['points']; ?></td>
			<td><?php echo $question['difficulty']; ?></td>
			<td><?php echo $question['question_type_id']; ?></td>
			<td><?php echo $question['created']; ?></td>
			<td><?php echo $question['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'questions', 'action' => 'view', $question['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'questions', 'action' => 'edit', $question['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'questions', 'action' => 'delete', $question['id']), null, __('Are you sure you want to delete # %s?', $question['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
