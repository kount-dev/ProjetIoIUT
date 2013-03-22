<div class="questions fieldset">
    <?php echo $this->Form->create('Qcu', array('action' => 'generation')); ?>
    <fieldset>
        <legend><?php echo __('Add Question'); ?></legend>
    <?php
        echo $this->Form->input('type', array('value' => 'qcus'));
        echo $this->Form->input('question');
        echo $this->Form->input('choix1');
        echo $this->Form->input('choix2');
    ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
