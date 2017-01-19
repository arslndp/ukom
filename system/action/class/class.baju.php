<?php
	/**
	* 
	*/
	class baju{

		private $db;

		function __construct($db)
		{

			$this->db = $db;

		}
/*
			function tambah($desc_baju,$cust,$date,$harga)
			{
				$sql = "INSERT INTO T_baju(desc_baju,id_customer,date_baju,harga_baju)
									VALUES(?,?,?,?)";
				$x = $this->db -> prepare($sql);
				$x -> execute(array($desc_baju,$cust,$date,$harga));
			}
*/

			function tambah($desc_baju,$cust,$date,$berat,$paket)
			{
				$sql = "SELECT * FROM T_paket where id_paket = ?";
				$x = $this->db -> prepare($sql);
				$x -> execute(array($paket));
				$f = $x -> fetch();

				// hitungan di mulai

				$harga = $berat * $f['harga_paket'];

				//

				$sql = "INSERT INTO T_baju(desc_baju,id_customer,date_baju,harga_baju,id_paket)
						VALUES(?,?,?,?,?)";
				$x = $this->db -> prepare($sql);
				$x -> execute(array($desc_baju,$cust,$date,$harga,$f['id_paket']));

			}
	}