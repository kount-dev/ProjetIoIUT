<?php
    echo "<input type='radio' name='data[Question][".$num_question."][content][answer]' id='Question".$num_question."ContentAnswer".$nb_choice."' value='".$nb_choice."'>";
    echo $this->Form->input('Question.'.$num_question.'.content.choices.'.$nb_choice, array('label' => 'Choice '.$nb_choice));
?>
