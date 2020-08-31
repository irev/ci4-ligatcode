<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row content">
    <h1><?= $content; ?></h1>
</div>
<table class="table table-light table-striped">
    <tbody>
	    <tr><th width="15%">Name</th><td>: 	<?php echo $data['name']; ?></td></tr>
	    <tr><th width="15%">Link</th><td>: 	<?php echo $data['link']; ?></td></tr>
	    <tr><th width="15%">Icon</th><td>: 	<?php echo $data['icon']; ?></td></tr>
	    <tr><th width="15%">Is Active</th><td>: 	<?php echo $data['is_active']; ?></td></tr>
	    <tr><th width="15%">Is Parent</th><td>: 	<?php echo $data['is_parent']; ?></td></tr>
</tbody>
</table>
    <div class="d-flex p-2 bd-highlight">
        <a class="btn btn-sm btn-danger" href="<?= \base_url('menu') ?>">back</a>
    </div>
<?= $this->endSection(); ?>