<?php

	/**
	* 
	*/
	class paket{

		private $db;

		function __construct($db)
		{

			$this->db = $db;

		}

			function tambah($nama_paket,$desc_paket,$harga_paket)
			{

				$sql = "INSERT INTO T_paket(nama_paket,desc_paket,harga_paket) VALUES(?,?,?)";
				$x = $this->db -> prepare($sql);
				$f = $x -> execute(array($nama_paket,$desc_paket,$harga_paket));

				if($f){

					return 'ok';

				}else{

					return 'gagal';

				}

			}

			function hapus()
			{
				#
			}

			function edit()
			{
				#
			}

			function listing()
			{

				$sql = "SELECT * FROM T_paket";
				$x = $this->db -> prepare($sql);
				$x -> execute();
				$f = $x -> fetchAll();
				return $f;
			}

	}