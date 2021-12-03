<?php
    include APPPATH . 'views/Fragment/header.php'; 
    include APPPATH . 'views/Fragment/menu.php' ;
?>

<h1>Rumah Sakit</h1>

<table class="table table-striped container"> 
    <tr>
        <th>No_RM</th>
        <th>Nama Pasien</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>ID perawat</th>
        <th>ID Poliklinik</th>
        <th>Diagnosa</th>
		<th>No Ruangan</th>
		
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['id'] ?></td>
            <td><?= $data['nama_pasien'] ?></td>
			<td><?= $data['alamat'] ?></td>
            <td><?= $data['jenis_kelamin']==1?"laki-laki":"perempuan" ?></td>
			<td><?= $data['id_perawat'] ?></td>
            <td><?= 1 ?></td>
			<td><?= $data['diagnosa'] ?></td>
            <td><?= $data['no_ruang'] ?></td>
            <td>
                
            </td>
        </tr>
    <?php 
    }
    ?>
</table>