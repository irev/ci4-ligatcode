<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="row content">
    <h1><?= $content; ?></h1>
</div>
<h4 style="margin-top:0px">Menu <?php echo $content; ?></h4>
<form action="<?= base_url($action) ?>" method="post">
	 <div class="form-group">
                        <label for="varchar">Name
                            <?php echo ('name') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="name" id="name"
                            placeholder="Name" value="<?php echo $data['name']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Link
                            <?php echo ('link') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="link" id="link"
                            placeholder="Link" value="<?php echo $data['link']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Icon
                            <?php echo ('icon') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="icon" id="icon"
                            placeholder="Icon" value="<?php echo $data['icon']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="int">Is Active
                            <?php echo ('is_active') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="is_active" id="is_active"
                            placeholder="Is Active" value="<?php echo $data['is_active']; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="int">Is Parent
                            <?php echo ('is_parent') ?></label>
                        <input type="text" class="form-control" autocomplete="off" name="is_parent" id="is_parent"
                            placeholder="Is Parent" value="<?php echo $data['is_parent']; ?>" />
                    </div>
	 <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>"> 
	
    <div class="d-flex p-2 bd-highlight">
    <div class="form-group">
        <a class="btn btn-sm btn-danger" href="<?= base_url('menu') ?>">Cencel</a>
        <button class="btn btn-sm btn-primary" type="submit">SAVE</button>
    </div>
    </div>
</form>



<?= $this->endSection(); ?>