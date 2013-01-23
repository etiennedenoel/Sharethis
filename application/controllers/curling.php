<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Curling extends CI_Controller {

	public function __construct() {
            parent::__construct();

            if(!$this->session->userdata('logged_in')){
                redirect();
            }
        }

	public function index()
	{
		$this->load->helper('form');

		$this->load->model('M_curling');

		$dataList['liens'] = $this->M_curling->lister();

		$dataLayout['vue'] = $this->load->view('lister', $dataList, true);

		$this->load->view('layout', $dataLayout);
	}

	public function lister()
	{
		$this->load->helper('form');

		$this->load->model('M_Curling');

		$dataList['liens'] = $this->M_Curling->lister();

		$dataLayout['vue'] = $this->load->view('lister', $dataList, TRUE);

		$dataLayout['titre'] = $this->input->post('title');

		$dataLayout['lien'] = $this->input->post('url');

		$dataLayout['description'] = $this->input->post('desc');

		$dataLayout['img'] = $this->input->post('src');

		$dataLayout['id'] = $this->input->post('id');

		$dataLayout['vue'] = $this->load->view('lister', $dataList, TRUE);

		$this->load->view('layout', $dataLayout);
	}

	public function analyser ()
	{
		$url = $this->input->post('url');

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		$html = curl_exec($ch);

		if(!$html){
			redirect(base_url());
		}
		else{
			curl_close($ch);
			$html = utf8_decode($html);
			$dom = new DOMDocument();
			@$dom->loadHTML($html);

			$nodes = $dom->getElementsByTagName("title");
			$dataLayout['title'] = $nodes->item(0)->nodeValue;

			$nodes = $dom->getElementsByTagName("img");
			foreach($nodes as $node){
				$dataLayout['srcImg'][] = $node->getAttribute("src");
				//echo ('<img src="' + $nodei->getAttribute("src") + '" />');
			}

			$dataLayout['lien'] = $this->input->post('url');
			$nodes = $dom->getElementsByTagName("meta");

			foreach($nodes as $node){
				if(strtolower($node->getAttribute("name") == "description")){
					$dataLayout['description'] = $node->getAttribute("content");
				}
			}

			$this->load->helper('form');
			$dataLayout['vue'] = $this->load->view('listing', $dataLayout, true);
			$this->load->view('layout', $dataLayout);
		}

	}

	public function ajouter ()
	{
		$this->load->model('M_Curling');

		$data['titre'] = $this->input->post('titre');
		$data['lien'] = $this->input->post('lien');
		$data['description'] = $this->input->post('description');
		$data['img'] = $this->input->post('img');
		$this->M_Curling->inserer($data);
		$this->lister();

		$this->load->helper('form');
	}

	public function supprimer()
	{
		$this->load->model('M_Curling');

		$this->M_Curling->supprimer($this->uri->segment(3));
		$this->lister();
	}

	public function preview()
	{
		$this->load->model('M_Curling');

		$this->load->helper('form');

		$monPost = $this->M_Curling->voir($this->uri->segment(3));

		$data['titre'] = $monPost->title;

		$data['lien'] = $monPost->url;

		$data['description'] = $monPost->desc;

		$data['img'] = $monPost->src;

		$data['id'] = $monPost->id;


		$dataLayout['vue'] = $this->load->view('modifing', $data, true);

		$this->load->view('layout', $dataLayout);

	}

	public function modif()
	{
		$this->load->helper('form');
		$this->load->model('M_Curling');

		$data['titre'] = $this->input->post('titre');
		$data['lien'] = $this->input->post('lien');
		$data['description'] = $this->input->post('description');
		$data['img'] = $this->input->post('img');
		$this->M_Curling->modifier($this->input->post('id'), $data);


		$this->lister();
	}
}
