<?php
    echo "<input type='checkbox' name='data[Question][".$num_question."][content][answers][]' id='Question".$num_question."ContentAnswers".$nb_choice."' value='".$nb_choice."'>";
    echo $this->Form->input('Question.'.$num_question.'.content.choices.'.$nb_choice, array('label' => 'Choice '.$nb_choice));
?>
