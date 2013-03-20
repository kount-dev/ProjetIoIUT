<div class="questionsDisciplines view">
<h2><?php  echo __('Questions Discipline'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($questionsDiscipline['QuestionsDiscipline']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($questionsDiscipline['Question']['name'], array('controller' => 'questions', 'action' => 'view', $questionsDiscipline['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discipline'); ?></dt>
		<dd>
			<?php echo $this->Html->link($questionsDiscipline['Discipline']['name'], array('controller' => 'disciplines', 'action' => 'view', $questionsDiscipline['Discipline']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($questionsDiscipline['QuestionsDiscipline']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($questionsDiscipline['QuestionsDiscipline']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Questions Discipline'), array('action' => 'edit', $questionsDiscipline['QuestionsDiscipline']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Questions Discipline'), array('action' => 'delete', $questionsDiscipline['QuestionsDiscipline']['id']), null, __('Are you sure you want to delete # %s?', $questionsDiscipline['QuestionsDiscipline']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions Disciplines'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Questions Discipline'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
	</ul>
</div>
