<fieldset class="question">
	<?php
		echo "<h1>".$oData['question']['text']."</h1>";
		echo $this->Form->radio('Answer.Questions.Qcu.'.$nId, $oData['question']['option'], array('legend' => false));
	?>
</fieldset>