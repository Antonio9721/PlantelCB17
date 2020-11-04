<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class carreras extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Carreras_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosCarreras']=$this->Carreras_model->getCarreras();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Carreras/tblCarreras', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Carreras/registroCarreras');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Carreras_model');

		$data=array('Carrera'=>$_POST['carrera'],   
	                'Clave'=>$_POST['clave'],
					'NombreD'=>$_POST['nombred'],
					'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom']
	               
	                );
		if ($this->Carreras_model->insertCarreras($data)){
			redirect('Carreras/index');
		}
	}

	function delete($idCarrera){
		//cargar el modelo
		$this->load->model('Carreras_model');
		//cargar la funcion
		$this->Carreras_model->delete($idCarrera);
		redirect('Carreras/index');
	}


	function findone($idCarrera){
		//cargar modelo
		$this->load->model('Carreras_model');
		//cargar la función
		$data['carrerasolito']=$this->Carreras_model->get_one_Carreras($idCarrera);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Carreras/editarCarreras',$data);
		$this->load->view('layout/footer');
	} 

	function updateCarreras($idCarrera){
		$this->load->model('Carreras_model');
		$data=array('Carrera'=>$_POST['carrera'],
	                'Clave'=>$_POST['clave'],
					'NombreD'=>$_POST['nombred'],
					'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom']
	                );
		if ($this->Carreras_model->update($idCarrera,$data))
			redirect('Carreras/index');
	}
}