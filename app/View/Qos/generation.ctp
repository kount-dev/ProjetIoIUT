<div class="question fielset">
<?php echo $this->Form->create('Question'); ?>
    <fieldset>
        <legend><?php echo __('Open question'); ?></legend>
    <?php
        echo $this->Form->input('question');
        echo $this->Form->input('reponse');
        echo $this->Form->input('author');
        echo $this->Form->input('points');
        echo $this->Form->input('difficulty');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>