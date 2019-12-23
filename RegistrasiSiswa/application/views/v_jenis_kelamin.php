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
     <a href="<?= site_url('registrasi/regist'); ?>">Daftar Sekarang</a>
      <h3>Data Seluruh Mahasiswa</h3>
      <table border="1">
		<tr>
            <th>Jenis Kelamin</th>
            <th>Jumlah Siswa</th>
		</tr>
		<?php foreach($data as $d){ ?>
		<tr>
            <td><?php echo $d->asal_sekolah ?></td>
            <td><?php echo $d->NIM ?></td>
		</tr>
		<?php } ?>
	</table>
 </body>
 </html>