
<div class="questions form">
	<?php echo $this->Form->create('Question', array('enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Add Question'); ?></legend>
		<?php echo $this->Form->file('xmlFile'); ?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
