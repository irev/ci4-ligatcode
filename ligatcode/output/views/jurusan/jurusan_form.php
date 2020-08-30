<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
<style>
body {
    padding: 15px;
}
</style>
</head>

<body>
    <h2 style="margin-top:0px">Jurusan <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
	 <div class="form-group">
            <label for="varchar">Jurusan
                <?php echo form_error('jurusan') ?></label>
            <input type="text" class="form-control" name="jurusan" id="jurusan"
                placeholder="Jurusan" value="<?php echo $jurusan; ?>" />
        </div>
	 <input type="hidden" name="id_jurusan" value="<?php echo $id_jurusan; ?>" /> 
	 <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	 <a href="<?php echo site_url('jurusan') ?>" class="btn btn-default">Cancel</a>
	</form>
</body>

</html>