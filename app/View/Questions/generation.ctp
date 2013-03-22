<fieldset>
    <legend><?php echo __('Question'); ?></legend>
<?php
    echo $this->Form->input('user_id');
    echo $this->Form->input('points');
    echo $this->Form->input('difficulty');
    echo $this->Form->input('Discipline');
    echo $this->Form->label('question_type_id', 'Nouvelle Question');
    echo $this->Form->select('question_type_id', array('empty' => '(choisissez)'));
?>
</fieldset>