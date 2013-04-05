<fieldset>
	<?php
		echo "<legend>".$data['question']['text']."</legend>";
		echo $this->Form->radio('genre', $data['question']['option'], array('legend' => false));
	?>
</fieldset>