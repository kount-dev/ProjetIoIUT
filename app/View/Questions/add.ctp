<?php 

if($num_question == -1){
	$num_question = 1;
	echo $this->Html->script('addQuestions.ajax');
 ?> 
  <div>
    <ul id="tabBar">
      <li id="admin_challenge_tab" class="tab"><?php echo $this->Html->link(__('Challenges'), array('controller' => 'exercises', 'action' => 'index')); ?></li>
      <li id="admin_users_tab" class="tab"><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
      <li id="admin_questions_tab" class="tab"><?php echo $this->Html->link(__('Questions'), array('controller' => 'questions', 'action' => 'index')); ?></li>
      <li id="admin_disciplines_tab" class="tab"><?php echo $this->Html->link(__('Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?></li>
      <li id="admin_typequestions_tab" class="tab"><?php echo $this->Html->link(__('Questions Type'), array('controller' => 'questionTypes', 'action' => 'index')); ?></li>
      <li id="admin_groupuser_tab" class="tab"><?php echo $this->Html->link(__('Groups User'), array('controller' => 'groups', 'action' => 'index')); ?></li>
    </ul>
  </div>
  <div>
    <ul>
      <li class="tab"><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?></li>
      <li class="tab"><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
      <li class="tab"><?php echo $this->Html->link(__('Import Question'), array('controller' => 'questions', 'action' => 'import')); ?> </li>
    </ul>
  </div>
  <?php } ?>

<?php echo '<fieldset id="question_'.$num_question.'">'; ?>
    <legend><?php echo __('Question'); ?></legend>
<?php
    echo $this->Form->input('Question.'.$num_question.'.Question.points');
    echo $this->Form->input('Question.'.$num_question.'.Question.difficulty');
    echo $this->Form->input('Question.'.$num_question.'.Discipline',
                            array('label'=>'Question\'s disciplines',
                                  'type'=>'select',
                                  'multiple'=>true,
                                  'options' => $disciplines));
    echo $this->Form->input('Question.'.$num_question.'.Question.question_type_id',
                            array('empty' => 'Selectionnez votre type de question',
                                  'options' => $question_types_list,
                                  'onchange' => "javascript:addQuestionType(this);"));
    echo $this->Form->hidden('Question.'.$num_question.'.Question.user_id', array('value' => $author));
   	
   	if(isset($exerciseId) || !empty($exerciseId)){
    	echo $this->Form->hidden('Question.'.$num_question.'.Exercise.0', array('value' => $exerciseId));
    }
?>
    <div class="questions typeQuestion generation">
    </div>
</fieldset>