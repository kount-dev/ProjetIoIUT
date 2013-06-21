<?php 
        echo $this->Html->css('admin');
        echo $this->Html->css('question');
 ?>
<div class="exercises generation display">
    <?php echo $this->Form->create('Answer', array('action' => 'saveAnswer')); ?>
    <div id="question_list">
        <fieldset>
            <legend><?php echo $s_exerciseName; ?></legend>
            <?php
            echo $this->Form->hidden('Answer.Answer.user_id', array('value' => $s_personCo));
            echo $this->Form->hidden('Answer.Answer.exercise_id', array('value' => $n_exerciseId));
             ?>
        </fieldset>
        <?php
            echo $s_HTML;
            echo $this->Form->end(__('Submit'));
        ?>
    </div>
</div>