<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class informatica extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Informatica_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosInformatica']=$this->Informatica_model->getInformatica();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Informatica/tblInformatica', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Informatica/registroInformatica');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Informatica_model');

		$data=array('Nombre'=>$_POST['nombre'],
	                'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
	                'Semestre'=>$_POST['semestre'],
	                'Materia1'=>$_POST['materia1'],
	                'Materia2'=>$_POST['materia2']
	                );
		if ($this->Informatica_model->insertInformatica($data)){
			redirect('Informatica/index');
		}
	}

	function delete($idInfor){
		//cargar el modelo
		$this->load->model('Informatica_model');
		//cargar la funcion
		$this->Informatica_model->delete($idInfor);
		redirect('Informatica/index');
	}


	function findone($idInfor){
		//cargar modelo
		$this->load->model('Informatica_model');
		//cargar la función
		$data['informaticasolito']=$this->Informatica_model->get_one_Informatica($idInfor);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Informatica/editarInformatica',$data);
		$this->load->view('ayout/footer');
	} 

	function updateInformatica($idInfor){
		$this->load->model('Informatica_model');
		$data=array('Nombre'=>$_POST['nombre'],
	                'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
	                'Semestre'=>$_POST['semestre'],
	                'Materia1'=>$_POST['materia1'],
	                'Materia2'=>$_POST['materia2']
	                );
		if ($this->Informatica_model->update($idInfor,$data))
			redirect('Informatica/index');
	}
}