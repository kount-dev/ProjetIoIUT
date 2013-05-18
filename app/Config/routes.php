<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
//Router::connect ('/', array('controller'=>'users', 'action'=>'add'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/*Personal connections for this application. For any informations,
you can see the documentation at http://book.cakephp.org/2.0/fr/development/routing.html */

    /* Accueil */
    Router::connect('/challenges', array('controller' => 'exercises', 'action' => 'listByUser'));
    Router::connect('/profile/*', array('controller' => 'users', 'action' => 'view'));
    Router::connect('/leaderboard', array('controller' => 'users', 'action' => 'leaderboard'));
    Router::connect('/admin', array('controller' => 'users', 'action' => 'admin'));

    /* Challenge */
    Router::connect('/challenge/*', array('controller' => 'exercises', 'action' => 'display'));
    Router::connect('/challenge/feedback/*', array('controller' => 'answers', 'action' => 'displayByIdExercise'));

    /* Admin */
    Router::connect('/admin/challenges/feedback', array('controller' => 'answers'));
    Router::connect('/admin/challenges/feedback/:action/*', array('controller' => 'answers'));

    Router::connect('/admin/challenges', array('controller' => 'exercises'));
    Router::connect('/admin/challenges/:action/*', array('controller' => 'exercises'));

    Router::connect('/admin/users', array('controller' => 'users'));
    Router::connect('/admin/users/:action/*', array('controller' => 'users'));

    Router::connect('/admin/questions', array('controller' => 'questions'));
    Router::connect('/admin/questions/:action/*', array('controller' => 'questions'));

    Router::connect('/admin/disciplines', array('controller' => 'disciplines'));
    Router::connect('/admin/disciplines/:action/*', array('controller' => 'disciplines'));

    Router::connect('/admin/questionTypes', array('controller' => 'questionTypes'));
    Router::connect('/admin/questionTypes/:action/*', array('controller' => 'questionTypes'));


/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
