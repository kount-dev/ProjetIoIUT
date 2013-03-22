<div class="questions qcu fieldset">
        <legend><?php echo __('Add Question'); ?></legend>
    <?php
        echo $this->Form->input('user_id');
        echo $this->Form->input('points');
        echo $this->Form->input('difficulty');
        echo $this->Form->input('Discipline');
    	echo $this->Form->hidden('user_id', array('value' => $author));
    ?>
</div>