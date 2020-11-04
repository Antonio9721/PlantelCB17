<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alimentos extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Alimentos_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosAlimentos']=$this->Alimentos_model->getAlimentos();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Alimentos/tblAlimentos', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Alimentos/registroAlimentos');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Alimentos_model');

		$data=array('Nombre'=>$_POST['nombre'],
	                'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
	                'Semestre'=>$_POST['semestre'],
	                'Materia1'=>$_POST['materia1'],
	                'Materia2'=>$_POST['materia2']
	                );
		if ($this->Alimentos_model->insertAlimentos($data)){
			redirect('Alimentos/index');
		}
	}

	function delete($idAlim){
		//cargar el modelo
		$this->load->model('Alimentos_model');
		//cargar la funcion
		$this->Alimentos_model->delete($idAlim);
		redirect('Alimentos/index');
	}


	function findone($idAlim){
		//cargar modelo
		$this->load->model('Alimentos_model');
		//cargar la función
		$data['alimentosolito']=$this->Alimentos_model->get_one_Alimentos($idAlim);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Alimentos/editarAlimentos',$data);
		$this->load->view('layout/footer');
	} 

	function updateAlimentos($idAlim){
		$this->load->model('Alimentos_model');
		$data=array('Nombre'=>$_POST['nombre'],
	                'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
	                'Semestre'=>$_POST['semestre'],
	                'Materia1'=>$_POST['materia1'],
	                'Materia2'=>$_POST['materia2']
	                );
		if ($this->Alimentos_model->update($idAlim,$data))
			redirect('Alimentos/index');
	}
}