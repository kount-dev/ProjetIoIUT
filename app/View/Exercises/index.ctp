<?php 
		echo $this->Html->css('admin');
		echo $this->Html->css('challenge');
 ?>
<div id="actionBar">
	<?php echo $this->Html->link(null, array('controller' => 'exercises', 'action' => 'add'), array('class' => 'action_btn new')); ?>
	<?php echo $this->Html->link(null, array('controller' => 'exercises', 'action' => 'import'), array('class' => 'action_btn import')); ?>
	<?php echo $this->Html->link(null, array('controller' => 'answers', 'action' => 'index'), array('class' => 'action_btn answer')); ?>
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
	<div class="exercises index">

		<div id="question_list">
			<?php foreach ($exercises as $exercise): ?>
			<div class="question">
				<span class="infos">
					Close on
					<span class="date"><?php echo h($exercise['Exercise']['closing_date']); ?></span>
					by
					<span class="author"><?php echo h($exercise['User']['username']); ?></span>
				</span>
				<h3 class="title"><?php echo h($exercise['Exercise']['name']); ?></h3>
				<div class="actions">
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $exercise['Exercise']['id']), array('class' => 'btn')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $exercise['Exercise']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $exercise['Exercise']['id']));?>
					<?php echo $this->Html->link(__('Answers'), array('controller' => 'answers','action' => 'displayByIdExercise', $exercise['Exercise']['id']), array('class' => 'btn')); ?>
				</div>
				<p class="descr">Ceci est un qcm inutile mais qui est trop bien quand meme car il permet a Pikachu de se suicider sur un camion poubelle.</p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
