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
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($exercise['Exercise']['author']); ?>
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
		<dt><?php echo __('Discipline'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exercise['Discipline']['name'], array('controller' => 'disciplines', 'action' => 'view', $exercise['Discipline']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercices Disciplines'), array('controller' => 'exercices_disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercices Discipline'), array('controller' => 'exercices_disciplines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercices Questions'), array('controller' => 'exercices_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercices Question'), array('controller' => 'exercices_questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultats'), array('controller' => 'resultats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultat'), array('controller' => 'resultats', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Exercices Disciplines'); ?></h3>
	<?php if (!empty($exercise['ExercicesDiscipline'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Exercise Id'); ?></th>
		<th><?php echo __('Discipline Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($exercise['ExercicesDiscipline'] as $exercicesDiscipline): ?>
		<tr>
			<td><?php echo $exercicesDiscipline['id']; ?></td>
			<td><?php echo $exercicesDiscipline['exercise_id']; ?></td>
			<td><?php echo $exercicesDiscipline['discipline_id']; ?></td>
			<td><?php echo $exercicesDiscipline['created']; ?></td>
			<td><?php echo $exercicesDiscipline['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'exercices_disciplines', 'action' => 'view', $exercicesDiscipline['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'exercices_disciplines', 'action' => 'edit', $exercicesDiscipline['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'exercices_disciplines', 'action' => 'delete', $exercicesDiscipline['id']), null, __('Are you sure you want to delete # %s?', $exercicesDiscipline['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Exercices Discipline'), array('controller' => 'exercices_disciplines', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Exercices Questions'); ?></h3>
	<?php if (!empty($exercise['ExercicesQuestion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Exercise Id'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($exercise['ExercicesQuestion'] as $exercicesQuestion): ?>
		<tr>
			<td><?php echo $exercicesQuestion['id']; ?></td>
			<td><?php echo $exercicesQuestion['exercise_id']; ?></td>
			<td><?php echo $exercicesQuestion['question_id']; ?></td>
			<td><?php echo $exercicesQuestion['created']; ?></td>
			<td><?php echo $exercicesQuestion['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'exercices_questions', 'action' => 'view', $exercicesQuestion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'exercices_questions', 'action' => 'edit', $exercicesQuestion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'exercices_questions', 'action' => 'delete', $exercicesQuestion['id']), null, __('Are you sure you want to delete # %s?', $exercicesQuestion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Exercices Question'), array('controller' => 'exercices_questions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
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
