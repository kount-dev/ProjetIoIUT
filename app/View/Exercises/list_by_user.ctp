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
					echo $this->Html->link(__('Answer'), array('action' => 'display', $exercise['Exercise']['id']), array('class' => 'btn answer'));
					?>
					<?php
					echo $this->Html->link(__('Feedback'), array('controller' => 'answers','action' => 'displayByIdExercise', $exercise['Exercise']['id']), array('class' => 'btn feedback'));
					?>
				</div>
				<p class="descr">Ceci est un qcm inutile mais qui est trop bien quand meme car il permet a Pikachu de se suicider sur un camion poubelle.</p>
			</div>
		<?php endforeach; ?>
	</div>
</article>