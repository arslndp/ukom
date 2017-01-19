<?php
	/**
	* 
	*/
	class pelanggan{

		private $db;

		function __construct($db)
		{

			$this->db = $db;
		
		}

			function tambah($nama,$desc,$alamat,$email,$phone)
			{

				$date = date('Y-m-d H:i:S');
				$sql = "INSERT INTO T_customer(nama_customer,
											   desc_customer,
											   date_customer,
											   email_customer,
											   alamat_customer,
											   phone_customer
											   )
									VALUES (?,?,?,?,?,?)";
				$x = $this->db -> prepare($sql);
				$data = array(
								$nama,
								$desc,
								$date,
								$email,
								$alamat,
								$phone
					);
				$x -> execute($data);

				if($x){

					return 'ok';

				}else{

					return 'gagal';

				}

			}

			function listing()
			{
				$sql = "SELECT *FROM T_customer";
				$x = $this->db -> prepare($sql);
				$x -> execute();
				$f = $x -> fetchAll();
				return $f;

			}

			function count()
			{
				$sql = "SELECT * FROM T_customer";
				$x = $this->db ->prepare($sql);
				$x -> execute();
				$f = $x -> rowCount();
				return $f;
			}
	}