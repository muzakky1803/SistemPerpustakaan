<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where    = ['username_admin' => $username, 'password_admin' => md5($password)];
		$cek_user = $this->query->getData('*', 'admin', $where, NULL)->num_rows();
			if($cek_user > 0) {
				$data = $this->query->getData('*', 'admin', $where, NULL)->row();
				$this->session->set_userdata('nama_admin', $data->nama_admin);
				redirect(base_url('dashboard'), 'refresh');
				die;
			}else{
				$this->session->set_flashdata('gagal', 'Username atau Password tidak terdaftar!!');
				redirect(base_url('Login'), 'refresh');
			}
	}

	public function logout() {
		$this->session->unset_userdata('nama_admin');
		session_destroy();
		session_unset();
		redirect(base_url('login'), 'refresh');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/admin/Auth.php */