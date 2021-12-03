<?php
    include APPPATH . 'views/Fragment/header.php'; 
    include APPPATH . 'views/Fragment/menu.php' ;
?>

<h1>Tindakan</h1>
<a class="btn btn-primary" href="<?=BASE_URL."/tindakan/tambah"?>">Tambah</a>
<table class="table table-striped container"> 
    <tr>
        <th>id</th>
        <th>id perawat</th>
        <th>Alamat</th>
        <th>nama pasien</th>
        <th>jam</th>
        <th>diagnosa</th>
        <th>tindakan</th>
        <th>nomor ruang</th>
        <th>keterangan</th>
        <th>aksi</th>
      
		
    </tr>
    <?php
    
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['id'] ?></td>
            <td><?= $data['id_perawat'] ?></td>
            <td><?= $data['alamat'] ?></td>
			<td><?= $data['nama_pasien'] ?></td>
            <td><?= $data['jam'] ?></td>
            <td><?= $data['diagnosa'] ?></td>
            <td><?= $data['tindakan'] ?></td>
            <td><?= $data['no_ruang'] ?></td>
            <td><?= $data['keterangan'] ?></td>
           
            <td>
                <a class="btn btn-primary" href="<?=BASE_URL."/tindakan/detail/{$data['id']}"?>">Detail</a>
                <a class="btn btn-success" href="<?=BASE_URL."/tindakan/edit/{$data['id']}"?>">edit</a>
                <a class="btn btn-danger" onclick="return confirm('menghapus data?')" href="<?=BASE_URL."/tindakan/delete/{$data['id']}"?>">Hapus</a>
            </td>
        </tr>
    <?php 
    }
    ?>
</table>