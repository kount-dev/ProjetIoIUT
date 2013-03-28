<fieldset>
	<?php
		echo "<legend>".$data['question']['text']."</legend>";
		echo $this->Form->hidden('answer');
		foreach ($data['question']['option'] as $key => $value) {
			echo $this->Form->checkbox("answer.", array('hiddenField' => false, 'id' => "answer$key"));
			echo $this->Form->label("answer$key", $value);
		}
	?>
</fieldset>