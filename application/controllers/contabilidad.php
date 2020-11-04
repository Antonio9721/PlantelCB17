<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contabilidad extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Contabilidad_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosContabilidad']=$this->Contabilidad_model->getContabilidad();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Contabilidad/tblContabilidad', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Contabilidad/registroContabilidad');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Contabilidad_model');

		$data=array('Nombre'=>$_POST['nombre'],
	                'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
	                'Semestre'=>$_POST['semestre'],
	                'Materia1'=>$_POST['materia1'],
	                'Materia2'=>$_POST['materia2']
	                );
		if ($this->Contabilidad_model->insertContabilidad($data)){
			redirect('Contabilidad/index');
		}
	}

	function delete($idConta){
		//cargar el modelo
		$this->load->model('Contabilidad_model');
		//cargar la funcion
		$this->Contabilidad_model->delete($idConta);
		redirect('Contabilidad/index');
	}


	function findone($idConta){
		//cargar modelo
		$this->load->model('Contabilidad_model');
		//cargar la función
		$data['contabilidadsolita']=$this->Contabilidad_model->get_one_Contabilidad($idConta);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Contabilidad/editarContabilidad',$data);
		$this->load->view('layout/footer');
	} 

	function updateContabilidad($idConta){
		$this->load->model('Contabilidad_model');
		$data=array('Nombre'=>$_POST['nombre'],
	                'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
	                'Semestre'=>$_POST['semestre'],
	                'Materia1'=>$_POST['materia1'],
	                'Materia2'=>$_POST['materia2']
	                );
		if ($this->Contabilidad_model->update($idConta,$data))
			redirect('Contabilidad/index');
	}
}