<div class="resultats view">
<h2><?php  echo __('Resultat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resultat['Resultat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($resultat['Resultat']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resultat['User']['id'], array('controller' => 'users', 'action' => 'view', $resultat['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exercise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resultat['Exercise']['name'], array('controller' => 'exercises', 'action' => 'view', $resultat['Exercise']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Tentative'); ?></dt>
		<dd>
			<?php echo h($resultat['Resultat']['numero_tentative']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Envoie'); ?></dt>
		<dd>
			<?php echo h($resultat['Resultat']['date_envoie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Taux Reussite'); ?></dt>
		<dd>
			<?php echo h($resultat['Resultat']['taux_reussite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($resultat['Resultat']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($resultat['Resultat']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Resultat'), array('action' => 'edit', $resultat['Resultat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Resultat'), array('action' => 'delete', $resultat['Resultat']['id']), null, __('Are you sure you want to delete # %s?', $resultat['Resultat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
	</ul>
</div>
