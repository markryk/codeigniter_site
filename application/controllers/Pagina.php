<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$dados['titulo'] = "MH Web";
		$this->load->view('home', $dados);
	}

	public function clientes() {
		$dados['titulo'] = "Clientes - MH Web";
		$this->load->view('clients', $dados);
	}

	public function servicos() {
		$dados['titulo'] = "O que eu faço - MH Web";
		$this->load->view('jobs', $dados);
	}

	public function sobre() {
		$dados['titulo'] = "Sobre mim - MH Web";
		$this->load->view('about', $dados);
	}

	public function contato() {
		$this->load->helper('form'); //usa-se esse helper dentro desse método, pq só vai ser utilizado na pág. de contato
		$this->load->library(array('form_validation', 'email'));

		//A seguir, será feito a validação de cada campo do formulário
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('assunto', 'Assunto', 'trim|required');
		$this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required');

		if ($this->form_validation->run() == FALSE):
			$dados['formerror'] = validation_errors();
		else:
			$dados_form = $this->input->post();
			$this->email->from($dados_form['email'], $dados_form['nome']);
			$this->email->to('marcus.henrick.marcushenrick@gmail.com');
			$this->email->subject($dados_form['assunto']);
			$this->email->message($dados_form['mensagem']);
			if ($this->email->send()):
				$dados['formerror'] = "Email enviado com sucesso";
			else:
				$dados['formerror'] = "Erro ao enviar email";
			endif;
			//$dados['formerror'] = 'A validação funcionou corretamente';
		endif;

		$dados['titulo'] = "Fale comigo - MH Web";
		$this->load->view('contact', $dados);
	}
}