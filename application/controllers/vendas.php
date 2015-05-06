<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendas extends CI_Controller {

	public function nova() {

		$usuario = autoriza();

		$this->load->model(array("vendas_model", "produtos_model", "usuarios_model"));
		$vendas = array(
			"produto_id" => $this->input->post("produto_id"),
			"comprador_id" => $usuario["id"],
			"data_da_entrega" => dataPtBrParaMysql($this->input->post("data_de_entrega"))
		);
		$this->vendas_model->salva($vendas);

		$this->load->library("email");
		$config["protocol"] = "smtp";
		$config["smtp_host"] = "ssl://smtp.gmail.com";
		$config["smtp_user"] = "andersonbrantes@gmail.com";
		$config["smtp_pass"] = "ccvfvfdc43=43";
		$config["smtp_port"] = "465";
		$config["charset"] = "utf-8";
		$config["mailtype"] = "html";
		$config["newline"] = "\r\n";
		$this->email->initialize($config);


		$produtos = $this->produtos_model->busca($venda["produto_id"]);
		$vendedor = $this->produtos_model->busca($produto["usuario_id"]);

		$dados = array("produto" => $produto);
		$conteudo = $this->load->view("vendas/email.php", $dados, TRUE);

		$this->email->from("andersonbrantes@gmail", "Mercado");
		$this->email->to(array($vendedor['email']));
		$this->email->subject("Seu produto {$produto['nome']} foi vendido!");
		$this->email->message($conteudo);
		$this->email->send();



		$this->session->set_flashdata("success", "Pedido de compra efetuado com sucesso!");
		redirect("/");
	}

	public function index() {

		$usuario = $this->session->userdata("usuario_logado");
		$this->load->model("produtos_model");
		$produtosVendidos = $this->produtos_model->buscaVendidos($usuario);
		$dados = array("produtosVendidos" => $produtosVendidos);
		$this->load->template("vendas/index", $dados);

	}
}