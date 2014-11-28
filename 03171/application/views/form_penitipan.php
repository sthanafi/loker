<head>
<style>
  p    {color:green}
</style>
</head>


 <center>
 <h1>SISTEM LOKER</h1>

<b><ul class="nav nav-tabs">
	<li role="presentation"><a href="barang">Home</a></li>
	<li role="presentation" class="active">
	<?php echo anchor('#', 'Tambah Barang', 'title="tambah barang"'); ?>
	</li>
  	<li role="presentation">
  	<?php echo anchor('logout', 'Logout', 'title="logout"'); ?>
  	</li>
</ul></li>
</ul></b>


<form action="tambah" method="post">
	<h3>Input Penitipan Barang</h3>
	<p><b>Nama *: </b></p>
		<p><input type="text" name="nama"><?php echo form_error('nama');?></p>

	<p><b>No. Handphone *: </b></p>
		<p><input type="text" name="no_hp"><?php echo form_error('no_hp');?></p>

	<p><b>Keterangan Barang *: </b></p>
		<p><textarea name="keterangan"></textarea><?php echo form_error('keterangan');?></p>

	<p><b>Nomor Loker *: </b></p>
	<p><input type="text" name="no_loker"><?php echo form_error('no_loker');?></p>

	<p><input class = "btn btn-primary" type="submit" name= "simpan" value = "Simpan"></p>
	<p><span style ="color:red">*wajib diisi</span></p>
</form> 
 </center>

