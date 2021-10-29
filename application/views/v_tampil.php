<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Identitas Diri</title>
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
   </head>
   <body>
      <center>
         <h1>Identitas Diri</h1>
      </center>
      <center>
         <span><?php echo anchor('crud/tambah', 'Tambah Data'); ?></span>
      <table>
         <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Action</th>
         </tr>
         <?php
         $no = 1;
         foreach ($user as $u){
          ?>
          <tr>
             <td><?php echo $u->nim ?></td>
             <td><?php echo $u->nama ?></td>
             <td><?php echo $u->kelas ?></td>
             <td><?php echo $u->alamat ?></td>
             <td>
                <?php echo anchor('crud/edit/' . $u->nim, 'Edit'); ?>
                <?php echo anchor('crud/hapus/' . $u->nim, 'Hapus'); ?>
             </td>
          </tr>
       <?php } ?>
      </table>
   </center> 
   </body>
</html>