<?php 
		echo $this->Html->css('challenge');
 ?>

<article id="challenges">

	<div id="filters">

		<div id="btn_bar">
			<?php echo $this->Html->link(__('New Exercise'), array('action' => 'generation'), array('class' => 'btn view')); ?>
		</div>
		<input id="search_question" class="search" type="text" placeholder="Search..."/>
		<ul id="filter_list">
			<li class="filter">HTML</li>
			<li class="filter selected">CSS</li>
			<li class="filter">Javascript</li>
			<li class="filter">C++</li>
			<li class="filter">Python</li>
			<li class="filter">Sécurité</li>
			<li class="filter">Go Lang</li>
		</ul>
		<div class="separator"></div>
	</div>

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
					<?php
					echo $this->Html->link(__('View'), array('action' => 'view', $exercise['Exercise']['id']), array('class' => 'btn view'));
					?>
					<?php
					echo $this->Html->link(__('Edit'), array('action' => 'edit', $exercise['Exercise']['id']), array('class' => 'btn edit'));
					?>
				</div>
				<p class="descr">Ceci est un qcm inutile mais qui est trop bien quand meme car il permet a Pikachu de se suicider sur un camion poubelle.</p>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Exercise'), array('action' => 'add')); ?></li>
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
 -->