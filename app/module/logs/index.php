<?php 
	$x = new logs($db);
	$r = $x -> listing();
	$no = '1';
?>
<div class="home">
	<h1 style="text-align:center">Lihat logs</h1>
	<table class="table data">
		<thead>
			<td>No</td>
			<td>Nama Pelanggan</td>
			<td>Date</td>
			<td>Harga</td>
			<td>Paket</td>
			<td>Aksi</td>
		</thead>
		<tbody>
			<?php 
			foreach ($r as $data) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $data['nama_customer'] ?></td>
				<td><?php echo $data['date_customer'] ?></td>
				<td><?php echo $data['harga_baju'] ?></td>
				<td><?php echo $data['nama_paket'] ?></td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>