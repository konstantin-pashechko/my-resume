<?php 
class Controller 
{
	protected $model;

	protected function loadModel(){
		$this->model = new Model();
	}

	public function dump($var){
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
		die;
	}

	protected function render($data = null, $template = 'index'){

			foreach ($data as $key => $param){
				${$key} = $param;
			}
			
		require_once (ROOT.'/view/template/'.$template.'.php');
	}

}