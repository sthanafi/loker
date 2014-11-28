<head>
<style>
  p    {color:green}
</style>
</head>



<center>
	 <h1>SISTEM LOKER</h1>

<b><ul class="nav nav-tabs">
	<li role="presentation" class="active"><a href="#">Home</a></li>
	<li role="presentation">
	<?php echo anchor('barang/tambah', 'Tambah Barang', 'title="tambah barang"'); ?>
	</li>
  	<li role="presentation">
  	<?php echo anchor('logout', 'Logout', 'title="logout"'); ?>
  	</li>
</ul></li>
</ul></b>


<?php if ($barang) { ?>
<h3>Daftar Penitipan Barang</h3>

<p>Berikut adalah view untuk daftar penitipan barang :</p>
<table border="2px" class="table table-condensed">
	<thead class="headindex">
		<td><b>Nomer Transaksi</b></td>
		<td><b>Nama Pemilik</b></td>
		<td><b>Nomer HP</b></td>
		<td><b>Keterangan Barang</b></td>
		<td><b>Nomor Loker</b></td>
	</thead>
	<?php 
	$this->load->view('header');
	foreach($barang as $item) {
		echo "<tr>";
		echo "<td>".$item['id_transaksi']."</td>";
		echo "<td>".$item['nama_pengguna']."</td>";
		echo "<td>".$item['no_hp']."</td>";
		echo "<td>".$item['keterangan']."</td>";
		echo "<td>".$item['no_loker']."</td>";
		echo "</tr>";
	}
	?>
</table>
<?php } else { echo "Data masih kosong"; } ?>
</center>