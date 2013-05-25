<?php
     echo $this->Form->input('Question.content.answer', array('type' => 'radio', 'options' => array($nb_choice => $this->Form->input('Question.content.choices.' . $nb_choice, array('label' => 'Choice ' . $nb_choice))));
?>
