<?php echo "<fieldset id='Qcm'>"; ?>
    <legend><?php echo __('QCM'); ?></legend>
<?php

    echo $this->Form->input('Question.content.question', array('value' => $aFileXML['question']['text']));


    $aOptions = array();
	foreach ($aFileXML['question']['option'] as $nNumChoice => $sValue) {
	    $affiche = $nNumChoice;
	    $aOptions[$nNumChoice] = $this->Form->input('Question.content.choices.' . $nNumChoice, array('label' => 'Choice '.$affiche, 'value' => $sValue));
	}
    echo $this->Form->hidden('nb_choice', array('class' => 'nb_choice', 'value' => count($aFileXML['question']['option'])+1));

    foreach ($aOptions as $nb_choice => $value) {

         echo "<input type='checkbox' name='data[Question][content][answers][]' id='QuestionContentAnswers".$nb_choice."' value='".$nb_choice."'";

         foreach ($aFileXML['question']['answers'] as $Rep) {
             if($nb_choice == $Rep){
                echo ' checked';
             }
         }
         echo ">";
         echo $value;

    }

    echo "<input class='add_choice' value='Add choice' type='button' onclick='javascript:addEditChoice(this);'>";
?>
</fieldset>