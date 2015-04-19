<?php

class Produtos extends CI_Controller{

	public function index() {

		$produtos = array();

		$bola = array("nome" => "Bola de futebol", "descricao" => "Bola assinada pelo Zico", "preco" => 30);

		array_push($produtos, $bola);

		$dados = array("produtos" => $produtos);

		$this->load->view("produtos/index.php", $dados);
		
	}

}