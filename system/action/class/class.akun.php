<?php
	/**
	* Ukom nih brew 
	*
	*
	*/
	class akun{

		private $db;

		function __construct($db)
		{

			$this->db = $db;

		}

		function __invoke($db){

			echo "<h1>cie cie lupa masukin parameter kelasnya ni yeee :v chips ahoy :3</h1>";

		}

			function login($u,$p)
			{

				$sql = "SELECT * FROM T_akun WHERE username = ? AND password = md5(?)";
				$x = $this->db -> prepare($sql);
				$x -> execute(array($u,$p));
				$f = $x -> fetch();
				return $f;

			}

			function logout($sesi)
			{

				session_start();
				session_destroy();
				echo "<script>window.location='index.php'</script>";

			}

			function profile($id)
			{

				$sql = "SELECT * FROM AKUN WHERE username = ?";
				$x = $this->db -> prepare($sql);
				$x -> execute(array($id));
				$f = $x -> fetch();
				return $f;

			}

	}