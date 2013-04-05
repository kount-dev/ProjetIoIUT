<?php
    echo $this->Html->script('addQuestions.ajax');
    echo $this->Html->css('challenge');
    echo $this->Html->css('jquery-ui');
    echo $this->Html->css('datepicker');
    echo $this->Html->script('jquery-ui');
    echo $this->Html->script('timepicker');
?>
<script>
$(function() {
       $("#openDatePicker").datetimepicker();
       $("#closeDatePicker").datetimepicker();
});
</script>
<div class="exercises generation form" id="exercises_base">
<?php echo $this->Form->create('Exercise'); ?>
    <fieldset>
        <legend><?php echo __('New Exercise'); ?></legend>
    <?php
        echo $this->Form->input('Exercise.Exercise.name', array('label' => false, 'placeholder' => 'Title'));
        echo $this->Form->input('Exercise.Exercise.minimum_points', array('label' => false, 'placeholder' => 'Minimum points required'));
        echo $this->Form->input('Exercise.Exercise.opening_date', array('label' => false, 'placeholder' => 'Open Date Time','id'=>'openDatePicker','type'=>'text'));
        echo $this->Form->input('Exercise.Exercise.closing_date', array('label' => false, 'placeholder' => 'Close Date Time','id'=>'closeDatePicker', 'type'=>'text'));
        echo $this->Form->input('Exercise.Discipline', array('label'=>'Exersise\'s disciplines', 'type'=>'select', 'multiple'=>true, 'options' => $disciplines));
        echo $this->Form->hidden('Exercise.Exercise.user_id', array('value' => $author));
    ?>
    </fieldset>
    <input id="add_question" type="button" value="Add question" class="btn"/>

    <?php
        echo $this->Form->hidden('nb_question', array('value' => 0));
        echo $this->Form->submit('Save', array('class'=>'btn'));
        echo $this->Form->end();
    ?>
    <div class="separator"></div>
</div>
<div class="questions generation" id="exercises_questions">
</div>