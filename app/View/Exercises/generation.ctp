<?php echo $this->Html->script('addQuestions.ajax'); ?>

<div class="exercises generation form">
<?php echo $this->Form->create('Exercise'); ?>
    <fieldset>
        <legend><?php echo __('Generation Exercise'); ?></legend>
    <?php
        echo $this->Form->input('Exercise.Exercise.name');
        echo $this->Form->input('Exercise.Exercise.minimum_points');
        echo $this->Form->input('Exercise.Exercise.opening_date');
        echo $this->Form->input('Exercise.Exercise.closing_date');
        echo $this->Form->input('Exercise.Discipline',
                                array('label'=>'Exersise\'s disciplines',
                                      'type'=>'select',
                                      'multiple'=>true,
                                      'options' => $disciplines));
        echo $this->Form->hidden('Exercise.Exercise.user_id',
            array('value' => $author));
    ?>
    </fieldset>
    <?php echo $this->Form->hidden('nb_question', array('value' => 0)); ?>

    <div class="questions generation">

    </div>
    <input id="add_question" type="button" value="Add question"/>
<?php echo $this->Form->end(__('Submit')); ?>
</div>