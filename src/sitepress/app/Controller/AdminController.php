<?php

require_once 'AppAdminController.php';

class AdminController extends AppAdminController {

	public function index(){
		
	}


	public function login(){
		//$this->Auth->login();

		$this->redirect('/admin/');
	}

	public function logout(){
	}

}
