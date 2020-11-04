<?php 

class Auth extends CI_Controller
{

	public function logout()
	{
		unset($_SESSION);
		session_destroy();
		redirect('auth/login','refresh');
	}


	public function login()
	{

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		if ($this->form_validation->run() == TRUE) {
			# REVISAR EN DB
			$username = $_POST['username'];
			$password = md5($_POST['password']); 
			
			$this->db->select('*');
			$this->db->from('usuarios');
			$this->db->where(array('username'=>$username,'password'=>$password));
			$query = $this->db->get();

			$user = $query->row();

			if ($user->email) {
				$this->session->set_flashdata('success', 'Logeado con éxito');

				//enviar variables para sesion
				

				$_SESSION['user_logged'] = TRUE;
				$_SESSION['username'] = $user->username;

				redirect('user/profile','refresh');


			} else {
				$this->session->set_flashdata('error', 'Usuario no se encuentra registrado en la base de datos');
				redirect('auth/login','refresh');
			}
		}
		$this->load->view('layout/navar');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function register()
	{

		if (isset($_POST['register'])) {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('password', 'Confirm Password', 'required|min_length[5]|matches[password]');
			$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[12]');


			if ($this->form_validation->run() == TRUE) {
				echo 'validado con éxito';

				$data = array(
					'username' => $_POST['username'],
					'email' => $_POST['email'],
					'password' => md5($_POST['password']),
					'created_date' => date('Y-m-d'),
					'phone' => $_POST['phone']
				);

				$this->db->insert('usuarios',$data);

				$this->session->set_flashdata("success", "La cuenta ha sido registrada");
				redirect("auth/register","refresh");
			}
		}
		$this->load->view('layout/navar');
		$this->load->view('register');
		$this->load->view('footer');
	}
}