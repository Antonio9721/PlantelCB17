<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class karate extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Karate_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosKarate']=$this->Karate_model->getKarate();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Karate/tblKarate', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Karate/registroKarate');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Karate_model');

		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Karate_model->insertKarate($data)){
			redirect('Karate/index');
		}
	}

	function delete($idKarate){
		//cargar el modelo
		$this->load->model('Karate_model');
		//cargar la funcion
		$this->Karate_model->delete($idKarate);
		redirect('Karate/index');
	}


	function findone($idKarate){
		//cargar modelo
		$this->load->model('Karate_model');
		//cargar la función
		$data['karatesolito']=$this->Karate_model->get_one_Karate($idKarate);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Danza/editarDanza',$data);
		$this->load->view('layout/footer');
	} 

	function updateKarate($idKarate){
		$this->load->model('Karate_model');
		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Karate_model->update($idKarate,$data))
			redirect('Karate/index');
	}
}