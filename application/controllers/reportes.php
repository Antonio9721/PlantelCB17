<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reportes extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Reportes_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosReportes']=$this->Reportes_model->getReportes();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Reportes/tblReportes', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Reportes/registroReportes');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Reportes_model');

		$data=array('Nombre'=>$_POST['nombre'],
	                'ApellidoP'=>$_POST['apellidop'],
	                'ApellidoM'=>$_POST['apellidom'],
	                'Matricula'=>$_POST['matricula'],
					'Semestre'=>$_POST['semestre'],
					'Matricula'=>$_POST['matricula'],
					'Fecha'=>$_POST['fecha'],
					'Hora'=>$_POST['hora'],
	                'Reporte'=>$_POST['reporte'],
	                'Castigo'=>$_POST['castigo'],
	                'Acuerdo'=>$_POST['acuerdo']
	                );
		if ($this->Reportes_model->insertReportes($data)){
			redirect('Reportes/index');
		}
	}

	function delete($idReporte){
		//cargar el modelo
		$this->load->model('Reportes_model');
		//cargar la funcion
		$this->Reportes_model->delete($idReporte);
		redirect('Reportes/index');
	}


	function findone($idReporte){
		//cargar modelo
		$this->load->model('Reportes_model');
		//cargar la función
		$data['reportesolito']=$this->Reportes_model->get_one_Reportes($idReporte);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Reportes/editarReportes',$data);
		$this->load->view('layout/footer');
	} 

	function updateReportes($idReporte){
		$this->load->model('Reportes_model');
		$data=array('Nombre'=>$_POST['nombre'],
		            'ApellidoP'=>$_POST['apellidop'],
		            'ApellidoM'=>$_POST['apellidom'],
		            'Matricula'=>$_POST['matricula'],
		            'Semestre'=>$_POST['semestre'],
		            'Matricula'=>$_POST['matricula'],
		            'Fecha'=>$_POST['fecha'],
		            'Hora'=>$_POST['hora'],
		            'Reporte'=>$_POST['reporte'],
		            'Castigo'=>$_POST['castigo'],
		            'Acuerdo'=>$_POST['acuerdo']
	                );
		if ($this->Reportes_model->update($idReporte,$data))
			redirect('Reportes/index');
	}
}