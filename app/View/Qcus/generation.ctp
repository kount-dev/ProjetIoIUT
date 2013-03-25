<fieldset>
    <legend><?php echo __('QCU'); ?></legend>
<?php
    echo $this->Form->input('Qcu.'.$num_question.'.question');
    echo $this->Form->input('Qcu.'.$num_question.'.choix1');
    echo $this->Form->input('Qcu.'.$num_question.'.choix2');
?>
</fieldset>