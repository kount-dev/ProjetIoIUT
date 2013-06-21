<?php 
		echo $this->Html->css('challenge');
 ?>
<ul id="tabBar">
	<li id="challenge_tab" class="tab"><?php echo $this->Html->link(__('Challenges'), array('controller' => 'exercises','action' => 'listByUser')); ?></li>
	<li id="profile_tab" class="tab"><?php echo $this->Html->link(__('Profile'), array('controller' => 'users', 'action' => 'view')); ?> </li>
	<li id="leaderboard_tab" class="tab"><?php echo $this->Html->link(__('Leaderboard'), array('controller' => 'users', 'action' => 'leaderboard')); ?> </li>
</ul>
<div id="tabContent">
	<article id="challenges">
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
						echo $this->Html->link(__('Feedback'), array('controller' => 'answers','action' => 'displayByIdExercise', $exercise['Exercise']['id'], -1), array('class' => 'btn feedback'));
						?>
					</div>
					<p class="descr">Ceci est un qcm inutile mais qui est trop bien quand meme car il permet a Pikachu de se suicider sur un camion poubelle.</p>
				</div>
			<?php endforeach; ?>
		</div>
	</article>
</div>