<fieldset>
    <legend><?php echo __('QCU'); ?></legend>
<?php
    echo $this->Form->input('type', array('value' => 'qcus'));
    echo $this->Form->input('question');
    echo $this->Form->input('choix1');
    echo $this->Form->input('choix2');
?>
</fieldset>