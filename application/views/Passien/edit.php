<?php
    include APPPATH . 'views/Fragment/header.php'; 
    include APPPATH . 'views/Fragment/menu.php' ;
?>

<h1>Tambah Passien</h1>

<h3>
    <?= validation_errors(); ?>
</h3>

<form method="post" enctype="multipart/form-data"
action="<?=BASE_URL."/passien/edit_save"?>">
<input type="hidden" name="id" value="<?=$id?>">

<div class="form-group">
    <label>Nama Passien</label>
    <input type="text" value="<?=$nama_pasien?>" class="form-control" name="nama_passien" id="nama" required />
</div>

<div class="form-group">
    <label>alamat</label>
    <input type="text" value="<?=$alamat?>" class="form-control" name="alamat" id="email" required />
</div>

<div class="form-group">
    <label>tempat_lahir</label>
    <input type="text" value="<?=$tempat_lahir?>" class="form-control" name="tempat_lahir" id="telpon" required />
</div>

<div class="form-group">
    <label>tanggal_lahir</label>
    <input type="date"value="<?=$tanggal_lahir?>" class="form-control" name="tanggal_lahir" id="telpon" required />
</div>


<div class="form-group">
    <label>Jenis Kelamin</label>
    <input type="radio" name="jenis_kelamin" 
    id="jeniskelamin" value="1" checked />L
    <input type="radio" name="jenis_kelamin" 
    id="jeniskelamin" value="0"/>P
</div>

<div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" value="<?=$pekerjaan?>" class="form-control" name="pekerjaan" id="telpon" required />
</div>



<div >
    <input type="submit" name="submit" 
    id="submit" value="Simpan"/>
</div>

</form>