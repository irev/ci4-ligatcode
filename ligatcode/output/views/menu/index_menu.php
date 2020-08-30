
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <h1><?= $content; ?></h1>
</div>
<div class="row">
<div class="d-flex p-2 bd-highlight">
    <a href="<?= base_url('pages/create') ?>" class="btn btn-sm btn-primary">CREATE</a>
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
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $value) { ?>
                <tr>
                    <th scope="row"><?= $value['id_jurusan'] ?></th>
                    <td><?= $value['jurusan'] ?></td>
                    <td><?= $value['jurusan'] ?></td>
                    <td>
                        <span class="float-right">
                            <a type="button" class="btn btn-sm btn-primary" href="<?= base_url('pages/read/'.$value['id_jurusan'] )?>">READ</a>
                            <a type="button" class="btn btn-sm btn-warning" href="<?= base_url('pages/update/'.$value['id_jurusan'] )?>">EDITE</a>
                            <a type="button" class="btn btn-sm btn-danger" href="<?= base_url('pages/delete/'.$value['id_jurusan'] )?>" onclick="javascript: return confirm('Delete \nAre You Sure ?')">DELETE</a>
                        </span>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?><!doctype html>
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
    <h2 style="margin-top:0px">Menu List</h2>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4">
            <?php echo anchor(site_url('menu/create'),'Create', 'class="btn btn-primary"'); ?>
        </div>
        <div class="col-md-4 text-center">
            <div style="margin-top: 8px" id="message">
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
            </div>
        </div>
        <div class="col-md-1 text-right">
        </div>
        <div class="col-md-3 text-right">
            <form action="<?php echo site_url('menu/index'); ?>" class="form-inline" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                    <span class="input-group-btn">
                        <?php 
                                if ($q <> '')
                                {
                                    ?>
                        <a href="<?php echo site_url('menu'); ?>" class="btn btn-default">Reset</a>
                        <?php
                                }
                            ?>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-bordered" style="margin-bottom: 10px">
        <tr>
            <th>No</th>
		<th>Name</th>
		<th>Link</th>
		<th>Icon</th>
		<th>Is Active</th>
		<th>Is Parent</th>
		<th>Action</th>
        </tr><?php
            foreach ($menu_data as $menu)
            {
                ?>
        <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $menu->name ?></td>
			<td><?php echo $menu->link ?></td>
			<td><?php echo $menu->icon ?></td>
			<td><?php echo $menu->is_active ?></td>
			<td><?php echo $menu->is_parent ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('menu/read/'.$menu->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('menu/update/'.$menu->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('menu/delete/'.$menu->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
        <?php
            }
            ?>
    </table>
    <div class="row">
        <div class="col-md-6">
            <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	
        </div>
        <div class="col-md-6 text-right">
            <?php echo $pagination ?>
        </div>
    </div>
</body>

</html>