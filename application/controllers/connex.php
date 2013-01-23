<?php

class Connex extends CI_Controller {

	public function index(){
        $this->load->helper('form');

        $data['titre'] = 'Connexion';

        $data['vue'] = $this->load->view('membre_login', $data, true);

        $this->load->view('layout', $data);
    }

	public function login(){
		$user = $this->input->post('user');
		$password = $this->input->post('password');

		$data = array('user' => $user, 'password' => $password);

		$this->load->model('M_connex');

		$res = $this->M_connex->verification($data);

		if($res['ok']){
            $utilisateur = array('idUser' => $res['data']->idUser, 'logged_in' => TRUE);
            $this->session->set_userdata($utilisateur);
            redirect('curling');
        }
        else{
            $utilisateur = array('logged_in' => FALSE);
            $this->session->set_userdata($utilisateur);
            redirect('connex');
        }
	}


	public function inscription(){
		$user = $this->input->post('userInscI');

		if($this->input->post('passwordInscI1') == $this->input->post('passwordInscI2')){

			$password = $this->input->post('passwordInscI1');

		}

		$this->load->model('M_connex');

		$this->M_connex->inscription(array('user' => $user, 'password' => $password));

		$res = $this->M_connex->verification(array('user' => $user, 'password' => $password));

		if($res['ok']){
            $utilisateur = array('idUser' => $res['data']->idUser, 'logged_in' => TRUE);
            $this->session->set_userdata($utilisateur);
            redirect('curling');
        }
        else{
            $utilisateur = array('logged_in' => FALSE);
            $this->session->set_userdata($utilisateur);
            redirect('connex');
        }

	}
	public function deconnexion() {

            $this->session->sess_destroy();

            redirect('connex');
        }

}

