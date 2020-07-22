<?php

class RankingControlador
{
	
	function __construct(){	}

	public function index(){
		require_once 'Vista/includes/head.php';
		require_once 'Vista/includes/headerCliente.php';
		require_once 'Vista/Ranking.php';
		require_once 'Vista/includes/footer.php';
	}
}