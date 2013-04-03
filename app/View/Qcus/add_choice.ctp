<?php
    echo $this->Form->radio('Question.'.$num_question.'.content.answer',
                            array($nb_choice => ''),
                            array('legend' => false));
    echo $this->Form->input('Question.'.$num_question.'.content.choices.'.$nb_choice, array('label' => 'Choice '.$nb_choice));
?>
