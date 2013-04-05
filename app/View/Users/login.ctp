<p>You need to be connected to access this page.</p>
<p>Please use the terminal at the top-right to login</p>
<?php
$this->start('term_view');
echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->end('Connexion');
$this->end();
?>