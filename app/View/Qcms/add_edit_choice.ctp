<?php

    echo "<input type='checkbox' name='data[Question][content][answers][]' id='QuestionContentAnswers".$nb_choice."' value='".$nb_choice."'>";
    echo $this->Form->input('Question.content.choices.'.$nb_choice, array('label' => 'Choice '.$nb_choice));

?>
