<?php
    include APPPATH . 'views/Fragment/header.php'; 
    include APPPATH . 'views/Fragment/menu.php' ;
?>

<h1>Edit Perawat</h1>

<h3>
    <?= validation_errors(); ?>
</h3>

<form method="post" enctype="multipart/form-data"
action="<?=BASE_URL."/perawat/edit_save"?>">
<input type="hidden" value="<?=$id?>" name="id">
<div class="form-group">
    <label>id Poli</label> 
    <input type="text" value="<?=$id_poli?>" class="form-control" name="id_poli"  id="nama" required />
</div>

<div class="form-group">
    <label>nama perawat</label>
    <input type="text" value="<?=$nama_perawat?>" class="form-control" name="nama_perawat" id="email" required />
</div>

<div class="form-group">
    <label>alamat</label>
    <input type="text" value="<?=$alamat?>" class="form-control" name="alamat" id="telpon" required />
</div>

<div class="form-group">
    <label>tanggal_lahir</label>
    <input type="date" value="<?=$tgl_lahir?>" class="form-control" name="tgl_lahir" id="telpon" required />
</div>



<div >
    <input type="submit" name="submit" 
    id="submit" value="Simpan"/>
</div>

</form>