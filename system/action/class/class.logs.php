<?php
	
	/**
	* 
	*/
	class logs{

		private $db;

		function __construct($db){

			$this->db = $db;

		}

			function listing()
			{
				$sql = "SELECT T_baju.* ,
							   T_customer.* ,
							   T_paket.* 
						FROM T_baju
						INNER JOIN T_customer ON T_customer.id_customer = T_baju.id_customer
						INNER JOIN T_paket ON T_paket.id_paket = T_baju.id_paket";
				$f = $this->db -> prepare($sql);
				$f -> execute();
				$r = $f ->fetchAll();

				return $r;
			}

	}