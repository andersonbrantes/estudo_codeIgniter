<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vendas extends CI_Controller {

	public function nova() {

		$usuario = autoriza();

		$this->load->model("vendas_model");
		$vendas = array(
			"produto_id" => $this->input->post("produto_id"),
			"comprador_id" => $usuario["id"],
			"data_da_entrega" => dataPtBrParaMysql($this->input->post("data_de_entrega"))
		);
		$this->vendas_model->salva($vendas);
		$this->session->set_flashdata("success", "Pedido de compra efetuado com sucesso!");
		redirect("/");
	}

	public function index() {

		$usuario = $this->session->userdata("usuario_logado");
		$this->load->model("produtos_model");
		$produtosVendidos = $this->produtos_model->buscaVendidos($usuario);
		$dados = array("produtosVendidos" => $produtosVendidos);
		$this->load->view("vendas/index", $dados);

	}
}