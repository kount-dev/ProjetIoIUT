<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

	$title = "IoIUT";
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title; ?>
	</title>
	<?php
		echo $this->fetch('meta');
		echo $this->Html->meta('icon');
		echo $this->Html->css('reset');
		echo $this->Html->css('layout');
		echo $this->Html->script('jquery');
		echo $this->fetch('css');
	?>
</head>
<body>
	<header>
		<h1><?php echo $title; ?></h1>
		<div id="status">This is a preview of the status bar/notif</div>
		<div id="toolbar"></div>
	</header>
	<div id="wrapper">
		<section id="terminal">
			<div id="prompt">
				<?php 
					echo $this->fetch('term_view');
				 ?>
			</div>
		</section>
		<section id="main">
			<ul id="tabBar">
				<li id="challenge_tab" class="tab"><?php echo $this->Html->link(__('Challenges'), array('controller' => 'exercises','action' => 'listByUser')); ?></li>
				<li id="profile_tab" class="tab"><?php echo $this->Html->link(__('Profile'), array('controller' => 'users', 'action' => 'view')); ?> </li>
				<li id="leaderboard_tab" class="tab"><?php echo $this->Html->link(__('Leaderboard'), array('controller' => 'users', 'action' => 'leaderboard')); ?> </li>
				<?php 
					if(true/*condition si admin*/){
						echo '<li id="admin_tab" class="tab">' . $this->Html->link(__('Administration'), array('controller' => 'users', 'action' => 'admin')) . '</li>'; 
					}
				?>
			</ul>
			<div id="tabContent">
				<?php echo $this->fetch('content'); ?>
			</div>
		</section>
	</div>
</body>
<?php
	echo $this->Html->script('jquery');
	echo $this->Html->script('layout');
	echo $this->fetch('script');
?>
</html>