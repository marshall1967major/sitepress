<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));


// admin
Router::connect('/admin/', array('controller' => 'admin', 'action' => 'index'));
Router::connect('/admin/login', array('controller' => 'admin', 'action' => 'login'));
Router::connect('/admin/logout', array('controller' => 'admin', 'action' => 'logout'));


Router::connect('/admin/pages/', array('controller' => 'admin_pages', 'action' => 'index'));

Router::connect('/admin/pages/page/input', array('controller' => 'admin_pages', 'action' => 'page_input'));
Router::connect('/admin/pages/page/confirm', array('controller' => 'admin_pages', 'action' => 'page_confirm'));
Router::connect('/admin/pages/page/complete', array('controller' => 'admin_pages', 'action' => 'page_complete'));


/*
Router::connect('/admin/pages/category/load/', array('controller' => 'admin_pages', 'action' => 'category_load'));
Router::connect('/admin/pages/category/save/', array('controller' => 'admin_pages', 'action' => 'category_save'));
Router::connect('/admin/pages/page/load/', array('controller' => 'admin_pages', 'action' => 'page_load'));
Router::connect('/admin/pages/page/save/', array('controller' => 'admin_pages', 'action' => 'page_save'));
*/

Router::connect('/admin/directories/', array('controller' => 'admin_directories', 'action' => 'index'));
Router::connect('/admin/directories/load/', array('controller' => 'admin_directories', 'action' => 'load'));
Router::connect('/admin/directories/save/', array('controller' => 'admin_directories', 'action' => 'save'));


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
