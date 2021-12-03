<?php
    include APPPATH . 'views/Fragment/header.php'; 
    include APPPATH . 'views/Fragment/menu.php' ;
?>

<h1>Rumah Sakit</h1>
<a class="btn btn-primary" href="<?=BASE_URL."/passien/tambah"?>">Tambah</a>
<table class="table table-striped container"> 
    <tr>
        <th>No_RM</th>
        <th>Nama Pasien</th>
        <th>Alamat</th>
        <th>tempat_lahir</th>
        <th>tanggal_lahir</th>
        <th>Jenis Kelamin</th>
        <th>Pekerjaan</th>
        <th>Aksi</th>
      
		
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['id'] ?></td>
            <td><?= $data['nama_pasien'] ?></td>
			<td><?= $data['alamat'] ?></td>
            <td><?= $data['tempat_lahir'] ?></td>
            <td><?= $data['tanggal_lahir'] ?></td>
            <td><?= $data['jenis_kelamin']==1?"laki-laki":"perempuan" ?></td>
            <td><?= $data['pekerjaan'] ?></td>
            <td>
                <a class="btn btn-primary" href="<?=BASE_URL."/passien/detail/{$data['id']}"?>">Detail</a>
                <a class="btn btn-success" href="<?=BASE_URL."/passien/edit/{$data['id']}"?>">edit</a>
                <a class="btn btn-danger" onclick="return confirm('menghapus data?')" href="<?=BASE_URL."/passien/delete/{$data['id']}"?>">Hapus</a>
            </td>
        </tr>
    <?php 
    }
    ?>
</table>