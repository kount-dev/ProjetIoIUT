
<div class="exercises form">
	<?php echo $this->Form->create('Exercise', array('enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Add Exercise'); ?></legend>
		<?php echo $this->Form->file('xmlFile'); ?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
