<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class futbol extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Futbol_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosFutbol']=$this->Futbol_model->getFutbol();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Futbol/tblFutbol', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Futbol/registroFutbol');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Futbol_model');

		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Futbol_model->insertFutbol($data)){
			redirect('Futbol/index');
		}
	}

	function delete($idFutbol){
		//cargar el modelo
		$this->load->model('Futbol_model');
		//cargar la funcion
		$this->Futbol_model->delete($idFutbol);
		redirect('Futbol/index');
	}


	function findone($idFutbol){
		//cargar modelo
		$this->load->model('Futbol_model');
		//cargar la función
		$data['futbolsolito']=$this->Futbol_model->get_one_Futbol($idFutbol);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Futbol/editarFutbol',$data);
		$this->load->view('layout/footer');
	} 

	function updateFutbol($idFutbol){
		$this->load->model('Futbol_model');
		$data=array('Nombre'=>$_POST['nombre'],
					'Apaterno'=>$_POST['apaterno'],
					'Amaterno'=>$_POST['amaterno'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Hinicio'=>$_POST['hinicio'],
					'Hfin'=>$_POST['hfin']
	                );
		if ($this->Futbol_model->update($idFutbol,$data))
			redirect('Futbol/index');
	}
}