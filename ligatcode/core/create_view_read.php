<?php 
$string ="<?= \$this->extend('layout/template'); ?>
<?= \$this->section('content'); ?>

<div class=\"row content\">
    <h1><?= \$content; ?></h1>
</div>
<table class=\"table table-light table-striped\">
    <tbody>";
    
    foreach ($non_pk as $row) {
        if(isset($_POST['field_'.$row['column_name']]) && isset($_POST['generate']))  //meedun code selected filed
        { 
        $string .= "\n\t    <tr><th width=\"15%\">".label($row["column_name"])."</th><td>: \t<?php echo \$data['".$row["column_name"]."']; ?></td></tr>";
        }
        if(isset($_POST['generateall']))  //meedun code selected filed
        {
            $string .= "\n\t    <tr><th>".label($row["column_name"])."</th><td>: \t<?= \$data['".$row["column_name"]."']; ?></td></tr>";
        }
    }
$string .="
</tbody>
</table>
    <div class=\"d-flex p-2 bd-highlight\">
        <a class=\"btn btn-sm btn-danger\" href=\"<?= \base_url('$c_url') ?>\">back</a>
    </div>
<?= \$this->endSection(); ?>"; 

$result_view_read = createFile($string, $target."views/" . $c_url . "/" . $v_read_file);

?>