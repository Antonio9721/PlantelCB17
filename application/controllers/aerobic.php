<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aerobic extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Aerobic_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosAerobic']=$this->Aerobic_model->getAerobic();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Aerobic/tblAerobic', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Aerobic/registroAerobic');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Aerobic_model');

		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Aerobic_model->insertAerobic($data)){
			redirect('Aerobic/index');
		}
	}

	function delete($idAerobic){
		//cargar el modelo
		$this->load->model('Aerobic_model');
		//cargar la funcion
		$this->Aerobic_model->delete($idAerobic);
		redirect('Aerobic/index');
	}


	function findone($idAerobic){
		//cargar modelo
		$this->load->model('Aerobic_model');
		//cargar la función
		$data['aerobicsolito']=$this->Aerobic_model->get_one_Aerobic($idAerobic);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Aerobic/editarAerobic',$data);
		$this->load->view('layout/footer');
	} 

	function updateAerobic($idAerobic){
		$this->load->model('Aerobic_model');
		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Aerobic_model->update($idAerobic,$data))
			redirect('Aerobic/index');
	}
}