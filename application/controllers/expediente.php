<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class expediente extends CI_Controller {
	function index(){
		//cargamos el archivo modelado
		$this->load->view('layout/navar2');
		$this->load->model('Expediente_model');
		//cargamos la funcion que vamos a utilizar
		$data['datosExpediente']=$this->Expediente_model->getExpediente();
		//cargamos la vista con los datos encotrados.
		$this->load->view('Expediente/tblExpediente', $data);
		$this->load->view('layout/footer');
	}
	//abrir la pagina 
	function opencreate(){
		$this->load->view('layout/navar2');
		$this->load->view('Expediente/registroExpediente');
		$this->load->view('layout/footer');
	}

	function create(){
		$this->load->model('Expediente_model');

		$data=array('Nombre'=>$_POST['nombre'],
	                'Apaterno'=>$_POST['apaterno'],
	                'Amaterno'=>$_POST['amaterno'],
	                'CURP'=>$_POST['curp'],
	                'RFC'=>$_POST['rfc'],
	                'Correo'=>$_POST['correo'],
                    'Telefono'=>$_POST['telefono'],
                    'Tutor'=>$_POST['tutor'],
                    'TutorAp'=>$_POST['tutorap'],
					'TutorTel'=>$_POST['tutortel'],
					'Grupo'=>$_POST['grupo'],
					'Matricula'=>$_POST['matricula'],
					'Carrera'=>$_POST['carrera'],
					'Paraescolar'=>$_POST['paraescolar'],
					'Docente'=>$_POST['docente'],
                    'ApellidosD'=>$_POST['apellidosd'],
                    'Municipio'=>$_POST['municipio'],
                    'Comunidad'=>$_POST['comunidad'],
                    'CalleNom'=>$_POST['callenom'],
                    'CalleNum'=>$_POST['callenum']
	                );
		if ($this->Expediente_model->insertExpediente($data)){
			redirect('Expediente/index');
		}
	}

	function delete($idExpe){
		//cargar el modelo
		$this->load->model('Expediente_model');
		//cargar la funcion
		$this->Expediente_model->delete($idExpe);
		redirect('Expediente/index');
	}


	function findone($idExpe){
		//cargar modelo
		$this->load->model('Expediente_model');
		//cargar la función
		$data['expedientesolito']=$this->Expediente_model->get_one_Expediente($idExpe);

		//cargar vista
		$this->load->view('layout/navar2');
		$this->load->view('Expediente/editarExpediente',$data);
		$this->load->view('layout/footer');
	} 

	function updateExpediente($idExpe){
		$this->load->model('Expediente_model');
		$data=array('Nombre'=>$_POST['nombre'],
	                'Apaterno'=>$_POST['apaterno'],
	                'Amaterno'=>$_POST['amaterno'],
	                'CURP'=>$_POST['curp'],
	                'RFC'=>$_POST['rfc'],
	                'Correo'=>$_POST['correo'],
                    'Telefono'=>$_POST['telefono'],
                    'Tutor'=>$_POST['tutor'],
                    'TutorAp'=>$_POST['tutorap'],
					'TutorTel'=>$_POST['tutortel'],
					'Grupo'=>$_POST['grupo'],
					'Matricula'=>$_POST['matricula'],
					'Carrera'=>$_POST['carrera'],
					'Paraescolar'=>$_POST['paraescolar'],
					'Docente'=>$_POST['docente'],
                    'ApellidosD'=>$_POST['apellidosd'],
                    'Municipio'=>$_POST['municipio'],
                    'Comnunidad'=>$_POST['comunidad'],
                    'CalleNom'=>$_POST['callenom'],
                    'CalleNum'=>$_POST['callenum']

	                );
		if ($this->Expediente_model->update($idExpe,$data))
			redirect('RegistroExpediente/index');
	}
}