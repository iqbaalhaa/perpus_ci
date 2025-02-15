<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller
{

	/**
	 * Reference to the CI singleton
	 *
	 * @var	object
	 */
	private static $instance;

	/**
	 * CI_Loader instance
	 *
	 * @var CI_Loader
	 */
	public $load;

	/**
	 * CI_Benchmark instance 
	 *
	 * @var CI_Benchmark
	 */
	public $benchmark;

	/**
	 * CI_Hooks instance
	 *
	 * @var CI_Hooks 
	 */
	public $hooks;

	/**
	 * CI_Config instance
	 *
	 * @var CI_Config
	 */
	public $config;

	/**
	 * CI_Log instance
	 *
	 * @var CI_Log
	 */
	public $log;

	/**
	 * CI_URI instance
	 *
	 * @var CI_URI
	 */
	public $uri;

	/**
	 * CI_Router instance
	 *
	 * @var CI_Router
	 */
	public $router;

	/**
	 * CI_Output instance
	 *
	 * @var CI_Output
	 */
	public $output;

	/**
	 * CI_Security instance
	 *
	 * @var CI_Security
	 */
	public $security;

	/**
	 * CI_Input instance
	 *
	 * @var CI_Input
	 */
	public $input;

	/**
	 * CI_Lang instance
	 *
	 * @var CI_Lang
	 */
	public $lang;

	/**
	 * CI_DB instance
	 *
	 * @var CI_DB
	 */
	public $db;

	/**
	 * CI_UTF8 instance
	 *
	 * @var CI_UTF8
	 */
	public $utf8;

	/**
	 * CI_Email instance
	 *
	 * @var CI_Email
	 */
	public $email;

	/**
	 * CI_Session instance
	 *
	 * @var CI_Session
	 */
	public $session;

	/**
	 * CI_Form_validation instance
	 *
	 * @var CI_Form_validation
	 */
	public $form_validation;

	/**
	 * CI_Upload instance
	 *
	 * @var CI_Upload
	 */
	public $upload;

	/**
	 * CI_Encryption instance
	 *
	 * @var CI_Encryption
	 */
	public $encryption;

	/**
	 * Library instances
	 */
	public $pagination;
	public $calendar;
	public $cart;
	public $ftp;
	public $image_lib;
	public $javascript;
	public $table;
	public $trackback;
	public $unit_test;
	public $user_agent;
	public $xmlrpc;
	public $zip;

	/**
	 * Model instances
	 */
	public $Buku_model;
	public $Perpus_model;
	public $mread;

	/**
	 * Class constructor
	 *
	 * @return	void
	 */
	public function __construct()
	{
		self::$instance = &$this;

		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach (is_loaded() as $var => $class) {
			$this->$var = &load_class($class);
		}

		$this->load = &load_class('Loader', 'core');
		$this->load->initialize();
		log_message('info', 'Controller Class Initialized');
	}

	// --------------------------------------------------------------------

	/**
	 * Get the CI singleton
	 *
	 * @static
	 * @return	object
	 */
	public static function &get_instance()
	{
		return self::$instance;
	}
}
