<?php 
class Index extends Controller
{
	public function index(){
		$data = $this->getContent();
		$this->render($data);
	}

	private function getContent(){
		$this->loadModel();
		$result = [];
		$result['aboutMe'] = $this->model->selectAll('about-me')[0];
		$result['myProjects'] = $this->model->selectAll('my-projects');
		$result['workExperience'] = $this->model->selectAll('work-experience');
		$result['education'] = $this->model->selectAll('education');
		$result['contact'] = $this->model->selectAll('contact')[0];
		$result['techSkill'] = $this->model->selectAll('tech-skill');
		$result['softSkill'] = $this->model->selectAll('soft-skill');
		$result['image'] = $this->model->selectAll('image')[0];

		return $result;
	}
}