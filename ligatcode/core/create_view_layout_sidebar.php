<?php
$string ="<?php
\$menus = [";
$table_list = $ligat->table_list();
foreach ($table_list as $table) {
    $string .= '[\''. $table['table_name'].'\', \''. $table['table_name'].'\'],';
}

$string .="
];
?>
<ul class=\"nav flex-column\">
    <?php foreach (\$menus as \$m) : ?>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"<?= base_url() . '/' . \$m[0] ?>\"> <?= \$m[1] ?></a>
        </li>
    <?php endforeach; ?>
</ul>";

$string .= "\n\n\n\n<?php 
/* End of file views/layout/sidebar.php */
/* Location: ./app/views/layout */
/* Please DO NOT modify this information : */
/* Generated by Ligatcode Codeigniter 4 CRUD Generator " . date('Y-m-d H:i:s') . " */
?>";


$result_view_layout_sidebar = createFile($string, $target. "views/layout/sidebar.php");