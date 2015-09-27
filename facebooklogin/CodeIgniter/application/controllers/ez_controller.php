<?php
class Testing extends CI_Controller {
	function index() {
		$this->load->model ( 'ez_model' );
$data['result'] = $this->ez_model-> <span class="sql">getData</span>();
		$data ['page_title'] = "CodeIgniter Testing App!";
		$this->load->view ( 'ez_view', $data );
	}
}
?>