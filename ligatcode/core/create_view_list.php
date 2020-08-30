<?php 
$string ="
<?= \$this->extend('layout/template'); ?>
<?= \$this->section('content'); ?>

<div class=\"row\">
    <h1><?= \$content; ?></h1>
</div>
<div class=\"row\">
<div class=\"d-flex p-2 bd-highlight\">
    <a href=\"<?= base_url('$c_url/create') ?>\" class=\"btn btn-sm btn-primary\">CREATE</a>
</div>
</div>

<?php if (session()->getFlashdata('message')): ?>
    <div class=\"alert alert-info\" role=\"alert\">
        <?= session()->getFlashdata('message') ?>
    </div>   
<?php endif; ?>

<div class=\"row\">
    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th>No</th>";
            foreach ($non_pk as $row) {
            if(isset($_POST['field_'.$row['column_name']]) && isset($_POST['generate'])) //meedun code selected filed
            {
            $string .= "\n\t\t<th>" . label($row['column_name']) . "</th>";
            }
            if(isset($_POST['generateall'])) //meedun code selected filed
            {
            $string .= "\n\t\t<th>" . label($row['column_name']) . "</th>";
            }
            }
            $string .= "\n\t\t<th>Action</th>
        </tr>
        <tr>
        </thead>";


$string .= "<?php foreach (\$data as \$value): ?>
        <tr>";

            $string .= "\n\t\t\t<td width=\"80px\"><?php \$start=0; echo ++\$start ?></td>";
            foreach ($non_pk as $row) {
            if(isset($_POST['field_'.$row['column_name']]) && isset($_POST['generate'])) //meedun code selected filed
            {
            $string .= "\n\t\t\t<td><?= \$value['". $row['column_name'] . "'] ?></td>";
            }
            if(isset($_POST['generateall'])) //meedun code selected filed
            {
            $string .= "\n\t\t\t<td><?= \$value['". $row['column_name'] . "'] ?></td>";
            }
            }


$string .= "<td>
            <span class=\"float-right\">
                <a type=\"button\" class=\"btn btn-sm btn-primary\" href=\"<?= base_url('$c_url/read/'.\$value['$pk'] )?>\">READ</a>
                <a type=\"button\" class=\"btn btn-sm btn-warning\" href=\"<?= base_url('$c_url/update/'.\$value['$pk'] )?>\">EDITE</a>
                <a type=\"button\" class=\"btn btn-sm btn-danger\" href=\"<?= base_url('$c_url/delete/'.\$value['$pk'] )?>\" onclick=\"javascript: return confirm('Delete \\nAre You Sure ?')\">DELETE</a>
            </span>
            </td>
            <?php  endforeach; ?>
        </tbody>
    </table>
</div>
<?= \$this->endSection(); ?>";

$result_view_list = createFile($string, $target."views/" . $c_url . "/" . $v_list_file);

