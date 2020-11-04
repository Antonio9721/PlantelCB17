<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class baloncesto extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Baloncesto_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosBaloncesto']=$this->Baloncesto_model->getBaloncesto();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Baloncesto/tblBaloncesto', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Baloncesto/registroBaloncesto');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Baloncesto_model');

		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Baloncesto_model->insertBaloncesto($data)){
			redirect('Baloncesto/index');
		}
	}

	function delete($idBalon){
		//cargar el modelo
		$this->load->model('Baloncesto_model');
		//cargar la funcion
		$this->Baloncesto_model->delete($idBalon);
		redirect('Baloncesto/index');
	}


	function findone($idBalon){
		//cargar modelo
		$this->load->model('Baloncesto_model');
		//cargar la función
		$data['baloncestosolito']=$this->Baloncesto_model->get_one_Baloncesto($idBalon);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Baloncesto/editarBaloncesto',$data);
		$this->load->view('layout/footer');
	} 

	function updateBaloncesto($idBalon){
		$this->load->model('Baloncesto_model');
		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Baloncesto_model->update($idBalon,$data))
			redirect('Baloncesto/index');
	}
}