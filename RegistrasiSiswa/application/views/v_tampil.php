<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Laporan Seluruh Mahasiswa
   </title>
 </head>
 <body>
     <a href="<?= site_url('registrasi'); ?>">Beranda</a>
     <a href="<?= site_url('registrasi/regist'); ?>">Daftar Sekarang</a>
     <a href="<?= site_url('registrasi/asal_sekolah'); ?>">Cek Asal Sekolah</a>
      <h3>Data Seluruh Mahasiswa</h3>
      <table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
            <th>Kelamin</th>
            <th>Jurusan</th>
            <th>Asal Sekolah</th>
		</tr>
		<?php foreach($data as $d){ ?>
		<tr>
			<td><?php echo $d->NIM ?></td>
			<td><?php echo $d->nama ?></td>
            <td><?php echo $d->kelamin ?></td>
            <td><?php echo $d->jurusan ?></td>
            <td><?php echo $d->asal_sekolah ?></td>
		</tr>
		<?php } ?>
	</table>
 </body>
 </html>