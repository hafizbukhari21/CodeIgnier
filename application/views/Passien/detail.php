<?php
    include APPPATH . 'views/Fragment/header.php'; 
    include APPPATH . 'views/Fragment/menu.php' ;

?>

<h1>Rumah Sakit</h1>
<a class="btn btn-primary" href="<?=BASE_URL."/passien/view_index"?>">Kembali</a>
<table class="table table-striped container"> 
    <tr>
        <th>No_RM</th>
        <th>Nama Pasien</th>
        <th>Alamat</th>
        <th>tempat_lahir</th>
        <th>tanggal_lahir</th>
        <th>Jenis Kelamin</th>
        <th>Pekerjaan</th>
        
    </tr>
    <tr>
            <td><?= $id ?></td>
            <td><?= $nama_pasien ?></td>
			<td><?= $alamat ?></td>
            <td><?= $tempat_lahir ?></td>
            <td><?= $tanggal_lahir ?></td>
            <td><?= $jenis_kelamin==1?"laki-laki":"perempuan" ?></td>
            <td><?= $pekerjaan ?></td>
            
    </tr>
</table>