<?php
    include APPPATH . 'views/Fragment/header.php'; 
    include APPPATH . 'views/Fragment/menu.php' ;
?>

<h1>Edit Tindakan</h1>

<h3>
    <?= validation_errors(); ?>
</h3>

<form method="post" enctype="multipart/form-data"
action="<?=BASE_URL."/tindakan/edit_save"?>">
<input type="hidden" value="<?=$datas[0]["id"]?>" name="id">
<div class="form-group">
    <label>Pilih Perawat</label>
    <select name="id_perawat" class="form-control" >
    <?php
         // $idx = row ke-x, $row => datanya
          foreach($datas["perawat"]  as $row){
              ?>
              <option value="<?= $row['id'] ?>"><?= $row['nama_perawat'] ?></option>
              <?php
          }
    ?>
    </select>
</div>

<div class="form-group">
    <label>Pilih Pasien</label>
    <select name="id_pasien" class="form-control">
    
    <?php
         // $idx = row ke-x, $row => datanya
          foreach($datas["passien"] as $row){
              ?>
              <option value="<?= $row['id'] ?>"><?= $row['nama_pasien'] ?></option>
              <?php
          }
    ?>
    </select>
</div>

<div class="form-group">
    <label>jam</label>
    <input type="time" value="<?=$datas[0]["jam"]?>" value= class="form-control" name="jam" id="telpon" required />
</div>

<div class="form-group">
    <label>Diagnosa</label>
    <input type="text " value="<?=$datas[0]["diagnosa"]?>" class="form-control" name="diagnosa" id="telpon" required />
</div>

<div class="form-group">
    <label>tindakan</label>
    <input type="text" value="<?=$datas[0]["tindakan"]?>" class="form-control" name="tindakan" id="telpon" required />
</div>


<div class="form-group">
    <label>no ruang</label>
    <input type="number" value="<?=$datas[0]["no_ruang"]?>" min="0" class="form-control" name="no_ruang" id="telpon" required />
</div>

<div class="form-group">
    <label>keterangan</label>
    <input type="text" value="<?=$datas[0]["keterangan"]?>" class="form-control"  name="keterangan" id="telpon" required />
</div>



<div >
    <input type="submit" name="submit" 
    id="submit" value="Simpan"/>
</div>

</form>