<?php echo "<fieldset id='Qcu'>"; ?>
    <legend><?php echo __('QCU'); ?></legend>
<?php

    echo $this->Form->input('Question.content.question', array('value' => $aFileXML['question']['text']));


    $aOptions = array();
	foreach ($aFileXML['question']['option'] as $nNumChoice => $sValue) {
	    $affiche = $nNumChoice + 1;
	    $aOptions[$nNumChoice] = $this->Form->input('Question.content.choices.' . $nNumChoice, array('label' => 'Choice '.$affiche, 'value' => $sValue));
	}
    echo $this->Form->hidden('nb_choice', array('class' => 'nb_choice', 'value' => count($aFileXML['question']['option'])+1));

    echo $this->Form->input('Question.content.answer', array('type' => 'radio', 'options' => $aOptions, 'value' => $aFileXML['question']['answer']));

    echo "<input class='add_choice' value='Add choice' type='button' onclick='javascript:addEditChoice(this);'>";
?>
</fieldset>