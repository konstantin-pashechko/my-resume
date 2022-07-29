<?php 
class Edit extends Controller
{
	public function index()
	{
		if($_SESSION['state']=='edit'){
			unset($_SESSION['state']);
		} else {
			$_SESSION['state']= 'edit';
		}
		
	}
	
	public function update(){
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = file_get_contents("php://input");
			$this->loadModel();
			$result = $this->model->update(json_decode($data));
			echo $result;
			die;
		}
	}
}