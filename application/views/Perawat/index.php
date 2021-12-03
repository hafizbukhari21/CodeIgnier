<?php
    include APPPATH . 'views/Fragment/header.php'; 
    include APPPATH . 'views/Fragment/menu.php' ;
?>

<h1>Perawat</h1>
<a class="btn btn-primary" href="<?=BASE_URL."/perawat/tambah"?>">Tambah</a>
<table class="table table-striped container"> 
    <tr>
        <th>id perawat</th>
        <th>id Poli</th>
        <th>nama perawat</th>
        <th>alamat</th>
        <th>tanggal_lahir</th>
        <th>aksi</th>	
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['id'] ?></td>
            <td><?= $data['id_poli'] ?></td>
			<td><?= $data['nama_perawat'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td><?= $data['tgl_lahir'] ?></td>
            
            <td>
                <a class="btn btn-primary" href="<?=BASE_URL."/perawat/detail/{$data['id']}"?>">Detail</a>
                <a class="btn btn-success" href="<?=BASE_URL."/perawat/edit/{$data['id']}"?>">edit</a>
                <a class="btn btn-danger" onclick="return confirm('menghapus data?')" href="<?=BASE_URL."/perawat/delete/{$data['id']}"?>">Hapus</a>
            </td>
        </tr>
    <?php 
    }
    ?>
</table>