<fieldset class="question">
	<?php
		echo "<h1>".$oData['question']['text']."</h1>";
		
		foreach ($oData['question']['option'] as $key => $value) {
			echo "<input type='checkbox' name='data[Answer][Questions][Qcm][".$nId."][]' id='AnswerQuestionsQcm".$nId."' value='".$key."' style='margin-right:15px;'>";
			echo $value . '<br/><br/>';
		}
	?>
</fieldset>