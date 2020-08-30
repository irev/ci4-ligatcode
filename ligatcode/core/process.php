<?php
$ligat = new Ligat();
$result = array();

if (isset($_POST['generate']))
{
    // get form data
    $table_name = safe($_POST['table_name']);
    $jenis_tabel = safe($_POST['jenis_tabel']);
    $export_excel = safe(isset($_POST['export_excel']));
    $export_word = safe(isset($_POST['export_word']));
    $export_pdf = safe(isset($_POST['export_pdf']));
    $controller = safe($_POST['controller']);
    $model = safe($_POST['model']);

    if ($table_name <> '')
    {
        // set data
        $table_name = $table_name;
        $c = $controller <> '' ? ucfirst($controller) : ucfirst($table_name);
        $m = $model <> '' ? ucfirst($model) : ucfirst($table_name) . 'Models';
        $v_list = 'index_'.$table_name;
        $v_read = 'read_'.$table_name;
        $v_form = 'form_'.$table_name;
        $v_doc = $table_name . "_doc";
        $v_pdf = $table_name . "_pdf";

        // url
        $c_url = strtolower($c);

        // filename
        $c_file = $c . '.php';
        $m_file = $m . '.php';
        $v_list_file = $v_list . '.php';
        $v_read_file = $v_read . '.php';
        $v_form_file = $v_form . '.php';
        $v_doc_file = $v_doc . '.php';
        $v_pdf_file = $v_pdf . '.php';

        // read setting
        $get_setting = readJSON('core/settingjson.cfg');
        $target = $get_setting->target;

        if (!file_exists($target . "views/" . $c_url))
        {
            mkdir($target . "views/" . $c_url, 0777, true);
        }

        $pk = $ligat->primary_field($table_name);
        $non_pk = $ligat->not_primary_field($table_name);
        $all = $ligat->all_field($table_name);

        // generate
        include 'core/create_config_pagination.php';
        include 'core/create_controller.php';
        include 'core/create_model.php';
        if ($jenis_tabel == 'reguler_table') {
            include 'core/create_view_list.php';
        } else {
            include 'core/create_view_list_datatables.php';
            include 'core/create_libraries_datatables.php';
        }
        include 'core/create_view_form.php';
        include 'core/create_view_read.php';

        $export_excel == 1 ? include 'core/create_exportexcel_helper.php' : '';
        $export_word == 1 ? include 'core/create_view_list_doc.php' : '';
        $export_pdf == 1 ? include 'core/create_pdf_library.php' : '';
        $export_pdf == 1 ? include 'core/create_view_list_pdf.php' : '';

        $result[] = $result_controller;
        $result[] = $result_model;
        $result[] = $result_view_list;
        $result[] = $result_view_form;
        $result[] = $result_view_read;
        //$result[] = $result_view_doc;
        //$result[] = $result_view_pdf;
        $result[] = $result_config_pagination;
        //$result[] = $result_exportexcel;
        //$result[] = $result_pdf;
    } else
    {
        $result[] = 'No table selected.';
    }
}

if (isset($_POST['generateall']))
{

    $jenis_tabel = safe(isset($_POST['jenis_tabel']));
    $export_excel = safe(isset($_POST['export_excel']));
    $export_word = safe(isset($_POST['export_word']));
    $export_pdf = safe(isset($_POST['export_pdf']));

    $table_list = $ligat->table_list();
    foreach ($table_list as $row) {

        $table_name = $row['table_name'];
        $c = ucfirst($table_name);
        $m = ucfirst($table_name) . 'Model';
        $v_list = "index_".$table_name;
        $v_read = "read_".$table_name ;
        $v_form = "form_".$table_name ;
        $v_doc = $table_name . "_doc";
        $v_pdf = $table_name . "_pdf";

        // url
        $c_url = strtolower($c);

        // filename
        $c_file = $c . '.php';
        $m_file = $m . '.php';
        $v_list_file = $v_list . '.php';
        $v_read_file = $v_read . '.php';
        $v_form_file = $v_form . '.php';
        $v_doc_file = $v_doc . '.php';
        $v_pdf_file = $v_pdf . '.php';

        // read setting
        $get_setting = readJSON('core/settingjson.cfg');
        $target = $get_setting->target;
        if (!file_exists($target . "views/" . $c_url))
        {
            mkdir($target . "views/" . $c_url, 0777, true);
        }

        $pk = $ligat->primary_field($table_name);
        $non_pk = $ligat->not_primary_field($table_name);
        $all = $ligat->all_field($table_name);

        // generate
        include 'core/create_config_pagination.php';
        include 'core/create_controller.php';
        include 'core/create_model.php';
        if ($jenis_tabel == 'reguler_table') {
            include 'core/create_view_list.php';
        } else {
            include 'core/create_view_list_datatables.php';
            include 'core/create_libraries_datatables.php';
        }
        include 'core/create_view_form.php';
        include 'core/create_view_read.php';

        $export_excel == 1 ? include 'core/create_exportexcel_helper.php' : '';
        $export_word == 1 ? include 'core/create_view_list_doc.php' : '';
        $export_pdf == 1 ? include 'core/create_pdf_library.php' : '';
        $export_pdf == 1 ? include 'core/create_view_list_pdf.php' : '';

        $result[] = $result_controller;
        $result[] = $result_model;
        $result[] = $result_view_list;
        $result[] = $result_view_form;
        $result[] = $result_view_read;
        $result[] = $result_view_doc;
    }

    $result[] = $result_config_pagination;
    $result[] = $result_exportexcel;
    $result[] = $result_pdf;
}
?>