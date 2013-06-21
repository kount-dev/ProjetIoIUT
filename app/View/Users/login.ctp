<p>You need to be connected to access this page.</p>
<br/>
<?php
echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->end('Connexion');
?>