<fieldset>
	<?php
		echo "<h1>".$oData['question']['text']."</h1>";
		echo $this->Form->radio('Answer.Qcu.'.$nId, $oData['question']['option'], array('legend' => false));
	?>
</fieldset>