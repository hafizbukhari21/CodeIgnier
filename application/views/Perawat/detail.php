<?php
    include APPPATH . 'views/Fragment/header.php'; 
    include APPPATH . 'views/Fragment/menu.php' ;
?>

<h1>Perawat</h1>
<a class="btn btn-primary" href="<?=BASE_URL."/perawat"?>">Kembali</a>
<table class="table table-striped container"> 
    <tr>
        <th>id perawat</th>
        <th>id Poli</th>
        <th>nama perawat</th>
        <th>alamat</th>
        <th>tanggal_lahir</th>
        
       
      
		
    </tr>
   
 
        <tr>
            <td><?= $id ?></td>
            <td><?= $id_poli ?></td>
			<td><?= $nama_perawat ?></td>
            <td><?= $alamat ?></td>
            <td><?= $tgl_lahir ?></td>
            
            
        </tr>
    
</table>