<?php 
        echo $this->Html->css('admin');
        echo $this->Html->css('challenge');
 ?>
<div id="actionBar">
    <?php echo $this->Html->link(null, array('controller' => 'exercises', 'action' => 'index'), array('class' => 'action_btn list')); ?>
    <?php echo $this->Html->link(null, array('controller' => 'exercises', 'action' => 'import'), array('class' => 'action_btn import')); ?>
    <?php echo $this->Html->link(null, array('controller' => 'answers', 'action' => 'index'), array('class' => 'action_btn answer')); ?>
</div>
    <ul id="tabBar">
        <li id="admin_challenge_tab" class="tab"><?php echo $this->Html->link(__('Challenges'), array('controller' => 'exercises', 'action' => 'index')); ?></li>
        <li id="admin_users_tab" class="tab"><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
        <li id="admin_questions_tab" class="tab"><?php echo $this->Html->link(__('Questions'), array('controller' => 'questions', 'action' => 'index')); ?></li>
        <li id="admin_disciplines_tab" class="tab"><?php echo $this->Html->link(__('Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?></li>
        <li id="admin_typequestions_tab" class="tab"><?php echo $this->Html->link(__('Questions Type'), array('controller' => 'questionTypes', 'action' => 'index')); ?></li>
        <li id="admin_groupuser_tab" class="tab"><?php echo $this->Html->link(__('Groups User'), array('controller' => 'groups', 'action' => 'index')); ?></li>
		<li id="admin_groupiut_tab" class="tab"><?php echo $this->Html->link(__('Groups IUT'), array('controller' => 'iutgroups', 'action' => 'index')); ?></li>
    </ul>
<div id="tabContent">
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
            echo $this->Form->input('Exercise.IutGroup',
                                    array('label'=>'Groups IUT',
                                          'type'=>'select',
                                          'multiple'=>true,
                                          'options' => $iutgroups));
            echo $this->Form->input('Question');
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
</div>
