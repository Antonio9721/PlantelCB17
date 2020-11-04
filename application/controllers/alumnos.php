<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumnos extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Alumnos_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosAlumnos']=$this->Alumnos_model->getAlumnos();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Alumnos/tblAlumnos', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Alumnos/registroAlumnos');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Alumnos_model');

		$data=array('Nombre'=>$_POST['nombre'],
					'ApellidoP'=>$_POST['apellidop'],
					'ApellidoM'=>$_POST['apellidom'],
					'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
	                'Carrera'=>$_POST['carrera'],
	                'Paraescolar'=>$_POST['paraescolar'],
					'NombreA'=>$_POST['nombrea'],
					'Apaterno'=>$_POST['apaterno'],
	                'Amaterno'=>$_POST['amaterno']
	                );
		if ($this->Alumnos_model->insertAlumnos($data)){
			redirect('Alumnos/index');
		}
	}

	function delete($idAlumno){
		//cargar el modelo
		$this->load->model('Alumnos_model');
		//cargar la funcion
		$this->Alumnos_model->delete($idAlumno);
		redirect('Alumnos/index');
	}


	function findone($idAlumno){
		//cargar modelo
		$this->load->model('Alumnos_model');
		//cargar la función
		$data['alumnosolito']=$this->Alumnos_model->get_one_Alumnos($idAlumno);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Alumnos/editarAlumnos',$data);
		$this->load->view('layout/footer');
	} 

	function updateAlumnos($idAlumno){
		$this->load->model('Alumnos_model');
		$data=array('Nombre'=>$_POST['nombre'],
					'ApellidoP'=>$_POST['apellidop'],
					'ApellidoM'=>$_POST['apellidom'],
					'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
	                'Carrera'=>$_POST['carrera'],
	                'Paraescolar'=>$_POST['paraescolar'],
					'NombreA'=>$_POST['nombrea'],
					'Apaterno'=>$_POST['apaterno'],
	                'Amaterno'=>$_POST['amaterno']
	                );
		if ($this->Alumnos_model->update($idAlumno,$data))
			redirect('Alumnos/index');
	}
}