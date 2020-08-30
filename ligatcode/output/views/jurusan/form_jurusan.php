<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="row content">
    <h1><?= $content; ?></h1>
</div>
<h2 style="margin-top:0px">Jurusan <?php echo $button ?></h2>
< action="<?= $action ?>" method="post">
	 <input id="id_jurusan" class="form-control" type="text" name="id_jurusan" style="display:none;" value="<?= $data['id_jurusan'] ?>"> 
	 <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	 <a href="<?php echo site_url('jurusan') ?>" class="btn btn-default">Cancel</a>
	
    <div class="d-flex p-2 bd-highlight">
    <div class="form-group">
        <a class="btn btn-sm btn-danger" href="<?= base_url('jurusan') ?>">Cencel</a>
        <button class="btn btn-sm btn-primary" type="submit">SAVE</button>
    </div>
    </div>
</form>



<?= $this->endSection(); ?>