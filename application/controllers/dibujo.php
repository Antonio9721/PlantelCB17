<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dibujo extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Dibujo_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosDibujo']=$this->Dibujo_model->getDibujo();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Dibujo/tblDibujo', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Dibujo/registroDibujo');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Dibujo_model');

		$data=array('Nombre'=>$_POST['nombre'],
	                'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
	                'Semestre'=>$_POST['semestre'],
	                'Materia1'=>$_POST['materia1'],
	                'Materia2'=>$_POST['materia2']
	                );
		if ($this->Dibujo_model->insertDibujo($data)){
			redirect('Dibujo/index');
		}
	}

	function delete($idDibujo){
		//cargar el modelo
		$this->load->model('Dibujo_model');
		//cargar la funcion
		$this->Dibujo_model->delete($idDibujo);
		redirect('Dibujo/index');
	}


	function findone($idDibujo){
		//cargar modelo
		$this->load->model('Dibujo_model');
		//cargar la función
		$data['dibujosolito']=$this->Dibujo_model->get_one_Dibujo($idDibujo);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Dibujo/editarDibujo',$data);
		$this->load->view('layout/footer');
	} 

	function updateDibujo($idDibujo){
		$this->load->model('Dibujo_model');
		$data=array('Nombre'=>$_POST['nombre'],
	                'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
	                'Semestre'=>$_POST['semestre'],
	                'Materia1'=>$_POST['materia1'],
	                'Materia2'=>$_POST['materia2']
	                );
		if ($this->Dibujo_model->update($idDibujo,$data))
			redirect('Dibujo/index');
	}
}