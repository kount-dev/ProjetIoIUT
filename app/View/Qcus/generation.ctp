<div class="question fieldset">
    <fieldset>
        <legend><?php echo __('Single choice question'); ?></legend>
    <?php
        echo $this->Form->input('author');
        echo $this->Form->input('points');
        echo $this->Form->input('difficulty');
        echo $this->Form->input('question');
        echo $this->Form->input('reponse');
    ?>
    </fieldset>
</div>