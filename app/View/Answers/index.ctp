<?php 
		echo $this->Html->css('admin');
		echo $this->Html->css('answer');
 ?>
<div id="tabContent">
	<div class="answers index">
		<div id="answer_list">
			<?php foreach ($answers as $answer): ?>
			<div class="answer">
				<span class="infos">
					Created on
					<span class="date"><?php echo h($answer['Answer']['created']); ?></span>
				</span>
				<h3 class="title"><?php echo h($answer['Answer']['namefile']); ?></h3>
				<div class="actions">
					<?php echo $this->Html->link('FeedBack', array('action' => 'feedback', $answer['Exercise']['id'],$answer['Answer']['id']), array('class' => 'btn')); ?>
				</div>
				<div class="descr">
					<p>Nombre de tentatives: <?php echo h($answer['Answer']['attempt_number']); ?></p>
					<p>Taux de succes: <?php echo h($answer['Answer']['success_rate']) . "%"; ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<!-- <h2><?php echo __('Answers'); ?></h2>
		<table cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('namefile'); ?></th>
				<th><?php echo $this->Paginator->sort('user_id'); ?></th>
				<th><?php echo $this->Paginator->sort('exercise_id'); ?></th>
				<th><?php echo $this->Paginator->sort('attempt_number'); ?></th>
				<th><?php echo $this->Paginator->sort('success_rate'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($answers as $answer): ?>
		<tr>
			<td><?php echo h($answer['Answer']['id']); ?>&nbsp;</td>
			<td><?php echo h($answer['Answer']['namefile']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($answer['User']['id'], array('controller' => 'users', 'action' => 'view', $answer['User']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($answer['Exercise']['name'], array('controller' => 'exercises', 'action' => 'view', $answer['Exercise']['id'])); ?>
			</td>
			<td><?php echo h($answer['Answer']['attempt_number']); ?>&nbsp;</td>
			<td><?php echo h($answer['Answer']['success_rate']) . "%"; ?>&nbsp;</td>
			<td><?php echo h($answer['Answer']['created']); ?>&nbsp;</td>
			<td class="actions">
				<?php 

					echo $this->Html->link('FeedBack', array('action' => 'feedback', $answer['Exercise']['id'],$answer['Answer']['id'])); 
				?>
			</td>
		</tr>
	<?php endforeach; ?>
		</table> -->
	</div>
</div>
