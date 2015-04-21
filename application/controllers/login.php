<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function autenticar() {

		$this->load->model("usuarios_model");
		$email = $this->input->post("email");
		$senha = md5($this->input->post("senha"));
		$usuario = $this->usuarios_model->buscaPorEmailESenha($email, $senha);

		if($usuario) {
			$this->session->set_userdata("usuario_logado", $usuario);
			$dados = array("mensagem" => "Logado com sucesso!");
		} else {
			$dados = array("mensagem" => "Usuário ou senha inválidos!");
		}

		$this->load->view("login/autenticar", $dados);
	}
}