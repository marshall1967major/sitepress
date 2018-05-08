<?php

require_once 'AppAdminController.php';

class AdminPagesController extends AppAdminController{

	public $paginate = array(
		''
	);

	public function index(){

		

	}

	public function page_input(){
		if($this->request->is('post')){
			$this->redirect('/admin/pages/page/confirm');
		}
	}

	public function page_confirm(){
		$page = array(
			'Page' => array(
				'title' => 'title1',
				'body' => 'body1',
			)
		);

		$this->set('page', $page);

		if($this->request->is('post')){
			$this->redirect('/admin/pages/page/complete');
		}
	}

	public function page_complete(){
	}

	public function load(){
		
	}

	public function save(){
		
	}

	public function delete(){
		
	}

}
