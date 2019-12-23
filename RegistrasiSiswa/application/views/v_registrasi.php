<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Registrasi Mahasiswa
   </title>
 </head>
 <body>
     <a href="<?= site_url('registrasi'); ?>">Beranda</a>
     <a href="<?= site_url('registrasi/regist'); ?>">Daftar Sekarang</a>
     <a href="<?= site_url('registrasi/asal_sekolah'); ?>">Cek Asal Sekolah</a>
     <h2>Pendaftaran Mahasiswa</h2>
     <!-- <form action="<?php echo base_url(). 'registrasi/registrasi_siswa'; ?>" method="post"> -->
     <?php echo form_open('registrasi/registrasi_siswa');?>
     <p>Nama:</p>
     <p>
     <input type="text" name="nama" value="<?php echo set_value('nama'); ?>"/>
     </p>
 
     <p>Kelamin:</p>
     <p>
     <input type="radio" name="kelamin" value="Laki-Laki"/>Laki-Laki 
     <input type="radio" name="kelamin" value="Perempuan"/>Perempuan
     </p>
 
     <p>Jurusan:</p>
     <p>
     <select name="jurusan">
      <option value="IF">IF</option>
      <option value="SI">SI</option>
      <option value="SIA">SIA</option>
    </select>
     </p>
 
     <p>Asal Sekolah:</p>
     <p>
     <input type="text" name="asal_sekolah" value="<?php echo set_value('asal_sekolah'); ?>"/>
     </p>
     <p>
     <input type="submit" name="btnSubmit" value="Daftar" />
     </p>
 
     <?php echo form_close();?>
 </body>
 </html>
 