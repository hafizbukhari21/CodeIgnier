<?php
    include APPPATH . 'views/Fragment/header.php'; 
    include APPPATH . 'views/Fragment/menu.php' ;
?>

<h1>Tambah Tindakan</h1>

<h3>
    <?= validation_errors(); ?>
</h3>

<form method="post" enctype="multipart/form-data"
action="<?=BASE_URL."/tindakan/tambah_save"?>">

<div class="form-group">
    <label>Pilih Perawat</label>
    <select name="id_perawat" class="form-control" >
    <?php
         // $idx = row ke-x, $row => datanya
          foreach($perawat as $idx => $row){
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
          foreach($passien as $idx => $row){
              ?>
              <option value="<?= $row['id'] ?>"><?= $row['nama_pasien'] ?></option>
              <?php
          }
    ?>
    </select>
</div>

<div class="form-group">
    <label>jam</label>
    <input type="time" class="form-control" name="jam" id="telpon" required />
</div>

<div class="form-group">
    <label>Diagnosa</label>
    <input type="text" class="form-control" name="diagnosa" id="telpon" required />
</div>

<div class="form-group">
    <label>tindakan</label>
    <input type="text" class="form-control" name="tindakan" id="telpon" required />
</div>


<div class="form-group">
    <label>no ruang</label>
    <input type="number" min="0" class="form-control" name="no_ruang" id="telpon" required />
</div>

<div class="form-group">
    <label>keterangan</label>
    <input type="text" class="form-control" name="keterangan" id="telpon" required />
</div>




<div class="form-group">
    <label>Pekerjaan</label>
    <input type="text" class="form-control" name="pekerjaan" id="telpon" required />
</div>



<div >
    <input type="submit" name="submit" 
    id="submit" value="Simpan"/>
</div>

</form>