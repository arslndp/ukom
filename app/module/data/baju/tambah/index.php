<?php
	$x = new pelanggan($db);
	$f = $x -> listing();

	$j = new paket($db);
	$r = $j -> listing();
?>
<div class="home">
	<h1 style="text-align:center">Tambah Data Baju</h1>
	<form method="POST" action="index.php?action=TambahBaju">
	<table class="table">
		<tr>
			<td>Nama Pelanggan</td>
			<td> : <select name="cust"><option>none</option>
							<?php foreach ($f as $d) { ?>
							<option value="<?php echo $d['id_customer'] ?>"><?php echo $d['nama_customer'] ?></option>
							<?php }?>
					</select>

			</td>
		</tr>
		<tr>
			<td>Paket</td>
			<td> : <select name="paket">
						<option>none</option>
						<?php foreach ($r as $data) { ?>
						<option value='<?php echo $data['id_paket'] ?>'><?php echo $data['nama_paket'] ?></option>
						<?php }?>
					</select>
			</td>
		</tr>
		<tr>
			<td>Berat Baju</td>
			<td> : <input type="number" name="berat"> /kg</td>
		</tr>
		<tr>
			<td>Desc</td>
			<td> : <textarea name="desc"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td> : <input type="submit" value="Tambah" name=""></td>
		</tr>
	</table>
	</form>
</div>