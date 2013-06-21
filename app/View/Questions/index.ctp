<?php 
		echo $this->Html->css('admin');
		echo $this->Html->css('question');
 ?>
<div id="actionBar">
	<?php //echo $this->Html->link(null, array('controller' => 'questions', 'action' => 'add'), array('class' => 'action_btn new')); ?>
	<?php echo $this->Html->link(null, array('controller' => 'questions', 'action' => 'import'), array('class' => 'action_btn import')); ?>
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
	<div class="questions index">
		<div id="question_list">
			<?php foreach ($questions as $question): ?>
			<div class="question">
				<span class="infos">
					Created on
					<span class="date"><?php echo h($question['Question']['created']); ?></span>
				</span>
				<h3 class="title"><?php echo h($question['Question']['namefile']); ?></h3>
				<div class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $question['Question']['id']), array('class' => 'btn')); ?>
					<?php echo $this->Form->postLink(__('Edit'), array('action' => 'edit', $question['Question']['id']), array('class' => 'btn'));?>
					<?php echo $this->Html->link(__('Delete'), array('action' => 'delete', $question['Question']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $question['Question']['id'])); ?>
				</div>
				<div class="descr">
					<p>Points: <?php echo h($question['Question']['points']); ?></p>
					<p>Difficulty: <?php echo h($question['Question']['difficulty']); ?></p>
					<p>Type: <?php echo $this->Html->link($question['QuestionType']['name'], array('controller' => 'question_types', 'action' => 'view', $question['QuestionType']['id'])); ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<!-- <table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php //echo $this->Paginator->sort('id'); ?></th>
				<th><?php //echo $this->Paginator->sort('namefile'); ?></th>
				<th><?php //echo $this->Paginator->sort('user_id'); ?></th>
				<th><?php //echo $this->Paginator->sort('points'); ?></th>
				<th><?php //echo $this->Paginator->sort('difficulty'); ?></th>
				<th><?php //echo $this->Paginator->sort('question_type_id'); ?></th>
				<th><?php //echo $this->Paginator->sort('created'); ?></th>
				<th><?php //echo $this->Paginator->sort('modified'); ?></th>
				<th class="actions"><?php //echo __('Actions'); ?></th>
		</tr>
		<?php //foreach ($questions as $question): ?>
		<tr>
			<td><?php //echo h($question['Question']['id']); ?>&nbsp;</td>
			<td><?php //echo h($question['Question']['namefile']); ?>&nbsp;</td>
			<td>
				<?php //echo $this->Html->link($question['User']['id'], array('controller' => 'users', 'action' => 'view', $question['User']['id'])); ?>
			</td>
			<td><?php //echo h($question['Question']['points']); ?>&nbsp;</td>
			<td><?php //echo h($question['Question']['difficulty']); ?>&nbsp;</td>
			<td>
				<?php //echo $this->Html->link($question['QuestionType']['name'], array('controller' => 'question_types', 'action' => 'view', $question['QuestionType']['id'])); ?>
			</td>
			<td><?php //echo h($question['Question']['created']); ?>&nbsp;</td>
			<td><?php //echo h($question['Question']['modified']); ?>&nbsp;</td>
			<td class="actions">
				<?php //echo $this->Html->link(__('View'), array('action' => 'view', $question['Question']['id'])); ?>
				<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $question['Question']['id'])); ?>
				<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $question['Question']['id']), null, __('Are you sure you want to delete # %s?', $question['Question']['id'])); ?>
			</td>
		</tr>
	<?php //endforeach; ?>
		</table> -->
	</div>
</div>
