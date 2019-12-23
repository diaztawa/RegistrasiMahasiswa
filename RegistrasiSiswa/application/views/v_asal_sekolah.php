<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Laporan Asal Sekolah
   </title>
 </head>
 <body>
     <a href="<?= site_url('registrasi'); ?>">Beranda</a>
     <a href="<?= site_url('registrasi/regist'); ?>">Daftar Sekarang</a>
     <a href="<?= site_url('registrasi/asal_sekolah'); ?>">Cek Asal Sekolah</a>
      <h3>Data Asal Sekolah Mahasiswa</h3>
      <table border="1">
		<tr>
            <th>Asal Sekolah</th>
            <th>Jumlah Siswa</th>
		</tr>
		<?php foreach($asal_sekolah as $d){ ?>
		<tr>
            <td><?php echo $d->asal_sekolah ?></td>
            <td><?php echo $d->NIM ?></td>
		</tr>
		<?php } ?>
	</table>
 </body>
 </html>