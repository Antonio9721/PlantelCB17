<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rondalla extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Rondalla_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosRondalla']=$this->Rondalla_model->getRondalla();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Rondalla/tblRondalla', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Rondalla/registroRondalla');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Rondalla_model');

		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Rondalla_model->insertRondalla($data)){
			redirect('Rondalla/index');
		}
	}

	function delete($idRondalla){
		//cargar el modelo
		$this->load->model('Rondalla_model');
		//cargar la funcion
		$this->Danza_model->delete($idRondalla);
		redirect('Rondalla/index');
	}


	function findone($idRondalla){
		//cargar modelo
		$this->load->model('Rondalla_model');
		//cargar la función
		$data['rondallasolito']=$this->Rondalla_model->get_one_Rondalla($idRondalla);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Rondalla/editarRondalla',$data);
		$this->load->view('layout/footer');
	} 

	function updateRondalla($idRondalla){
		$this->load->model('Rondalla_model');
		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Rondalla_model->update($idRondalla,$data))
			redirect('Rondalla/index');
	}
}