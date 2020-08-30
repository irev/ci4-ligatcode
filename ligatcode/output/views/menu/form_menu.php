<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="row content">
    <h1><?= $content; ?></h1>
</div>
<h2 style="margin-top:0px">Menu <?php echo $button ?></h2>
< action="<?= $action ?>" method="post">
	 <div class="form-group">
                        <label for="varchar">Name
                            <?php echo form_error('name') ?></label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Name" value="<?php echo $name; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Link
                            <?php echo form_error('link') ?></label>
                        <input type="text" class="form-control" name="link" id="link"
                            placeholder="Link" value="<?php echo $link; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="varchar">Icon
                            <?php echo form_error('icon') ?></label>
                        <input type="text" class="form-control" name="icon" id="icon"
                            placeholder="Icon" value="<?php echo $icon; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="int">Is Active
                            <?php echo form_error('is_active') ?></label>
                        <input type="text" class="form-control" name="is_active" id="is_active"
                            placeholder="Is Active" value="<?php echo $is_active; ?>" />
                    </div>
	 <div class="form-group">
                        <label for="int">Is Parent
                            <?php echo form_error('is_parent') ?></label>
                        <input type="text" class="form-control" name="is_parent" id="is_parent"
                            placeholder="Is Parent" value="<?php echo $is_parent; ?>" />
                    </div>
	 <input id="id" class="form-control" type="text" name="id" style="display:none;" value="<?= $data['id'] ?>"> 
	 <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	 <a href="<?php echo site_url('menu') ?>" class="btn btn-default">Cancel</a>
	
    <div class="d-flex p-2 bd-highlight">
    <div class="form-group">
        <a class="btn btn-sm btn-danger" href="<?= base_url('menu') ?>">Cencel</a>
        <button class="btn btn-sm btn-primary" type="submit">SAVE</button>
    </div>
    </div>
</form>



<?= $this->endSection(); ?>