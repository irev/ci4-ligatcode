<?php 
$string ="<?= \$this->extend('layout/template'); ?>
<?= \$this->section('content'); ?>";

$string .="
\n\n<div class=\"row content\">
    <h1><?= \$content; ?></h1>
</div>
<h4 style=\"margin-top:0px\">".ucfirst($table_name)." <?php echo \$content; ?></h4>
<form action=\"<?= base_url(\$action) ?>\" method=\"post\">";
        foreach ($non_pk as $row) {
            if(isset($_POST['field_'.$row['column_name']]) && isset($_POST['generate'])) //meedun code selected filed
            {
                if ($row["data_type"] == 'text')
                {
                    $string .= "\n\t <div class=\"form-group\">
                        <label for=\"".$row["column_name"]."\">".label($row["column_name"])."
                            <?php echo ('".$row["column_name"]."') ?></label>
                        <textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\"
                            placeholder=\"".label($row["column_name"])."\"><?php echo \$data['".$row["column_name"]."; ?></textarea>
                    </div>";
                } else
                {
                    $string .= "\n\t <div class=\"form-group\">
                        <label for=\"".$row["data_type"]."\">".label($row["column_name"])."
                            <?php echo ('".$row["column_name"]."') ?></label>
                        <input type=\"text\" class=\"form-control\" autocomplete=\"off\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\"
                            placeholder=\"".label($row["column_name"])."\" value=\"<?php echo \$data['".$row["column_name"]."']; ?>\" />
                    </div>";
                }
            }
            if(isset($_POST['generateall'])) //meedun code selected filed
            {
                if ($row["data_type"] == 'text')
                {
                    $string .= "\n\t <div class=\"form-group\">
                        <label for=\"".$row["column_name"]."\">".label($row["column_name"])."
                            <?php echo ('".$row["column_name"]."') ?></label>
                        <textarea class=\"form-control\" rows=\"3\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\"
                            placeholder=\"".label($row["column_name"])."\"><?php echo \$data['".$row["column_name"]."']; ?></textarea>
                    </div>";
                } else
                {
                    $string .= "\n\t <div class=\"form-group\">
                        <label for=\"".$row["data_type"]."\">".label($row["column_name"])."
                            <?php echo ('".$row["column_name"]."') ?></label>
                        <input type=\"text\" class=\"form-control\" name=\"".$row["column_name"]."\" id=\"".$row["column_name"]."\"
                            placeholder=\"".label($row["column_name"])."\" value=\"<?php echo \$data['".$row["column_name"]."']; ?>\" />
                    </div>";
                }
            }

        }
        $string .= "\n\t <input id=\"$pk\" class=\"form-control\" type=\"text\" name=\"$pk\" style=\"display:none;\" value=\"<?= \$data['$pk'] ?>\"> ";
        $string .= "\n\t";

$string .= "
    <div class=\"d-flex p-2 bd-highlight\">
    <div class=\"form-group\">
        <a class=\"btn btn-sm btn-danger\" href=\"<?= base_url('$c_url') ?>\">Cencel</a>
        <button class=\"btn btn-sm btn-primary\" type=\"submit\">SAVE</button>
    </div>
    </div>
</form>
\n\n
<?= \$this->endSection(); ?>";






$result_view_form = createFile($string, $target."views/" . $c_url . "/" . $v_form_file);

?>