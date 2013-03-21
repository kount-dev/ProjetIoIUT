<div class="exercises generation form">
<?php echo $this->Form->create('Exercise'); ?>
    <fieldset>
        <legend><?php echo __('Generation Exercise'); ?></legend>
    <?php
        echo $this->Form->input('name');
        echo $this->Form->input('minimum_points');
        echo $this->Form->input('opening_date');
        echo $this->Form->input('closing_date');
        echo $this->Form->input('discipline_id');
        echo $this->Form->hidden('user_id', array('value' => $author));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>