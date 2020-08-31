
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <h1><?= $content; ?></h1>
</div>
<div class="row">
<div class="d-flex p-2 bd-highlight">
    <a href="<?= base_url('menu/create') ?>" class="btn btn-sm btn-primary">CREATE</a>
</div>
</div>

<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-info" role="alert">
        <?= session()->getFlashdata('message') ?>
    </div>   
<?php endif; ?>

<div class="row">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>No</th>
		<th>Name</th>
		<th>Link</th>
		<th>Icon</th>
		<th>Is Active</th>
		<th>Is Parent</th>
		<th>Action</th>
        </tr>
        <tr>
        </thead><?php foreach ($data as $value): ?>
        <tr>
			<td width="80px"><?php $start=0; echo ++$start ?></td>
			<td><?= $value['name'] ?></td>
			<td><?= $value['link'] ?></td>
			<td><?= $value['icon'] ?></td>
			<td><?= $value['is_active'] ?></td>
			<td><?= $value['is_parent'] ?></td><td>
            <span class="float-right">
                <a type="button" class="btn btn-sm btn-primary" href="<?= base_url('menu/read/'.$value['id'] )?>">READ</a>
                <a type="button" class="btn btn-sm btn-warning" href="<?= base_url('menu/update/'.$value['id'] )?>">EDITE</a>
                <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('menu/delete/'.$value['id'] )?>" onclick="javascript: return confirm('Delete \nAre You Sure ?')">DELETE</a>
            </span>
            </td>
            <?php  endforeach; ?>
        </tbody>
    </table>
    <!-- pagination -->
    <?php echo $pager->links('paging', 'ligatcode_pagination') ?>
</div>
<?= $this->endSection(); ?>