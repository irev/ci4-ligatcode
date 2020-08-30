<?php 
//error_reporting(0);
require_once 'harviacode.php';
require_once 'helper.php';
require_once 'process.php';
################################################################
/**
* @package    Harviacode
* @subpackage libraries
* @category   library
* @version    1.4.1 <beta> 27 August 220
* @author     meedun <simeedun@gmail.com>
* @link       http://blog.simeedun.com
*/
################################################################
 echo "<div class='alert alert-info'>";
 echo "<label>List Filed Of Table ". $_POST['table_name']."</label><br> <small>Please select the fields to be displayed<br>This feature only affects the <code>Generator</code> button, <br>ignored in <code>Generate All</code></small><hr>";
 $table_all_field = isset( $_POST['table_name'])? $hc->all_field($_POST['table_name']) : '';
 //var_dump($table_all_field);
 //echo'<a id="check_show" class="check_show" href="#">Show All</a></br>';
 foreach  ($table_all_field as $field) {  
    $check = $_POST['field_'.$field['column_name']] ==  '1' ? "checked" :'';  
    echo $_POST['table_name']; 
    if(isset($_POST['field_'.$field['column_name']]))
    { 
        echo'
            <label>
            <input type="checkbox"   class="field" name="field_'.$field['column_name'].'" value="1" '.$check.'>
            '.$field['column_name'].' <code>{'.$field['data_type'].'}</code>
            </label></br>
        ';
    }else{
        echo'
        <label>
        <input type="checkbox"  class="field" name="field_'.$field['column_name'].'" value="1" '.$check.'>
        '.$field['column_name'].' <code>{'.$field['data_type'].'}</code>
        </label></br>
    ';
    }   
}
 ?>
 <hr>
 <p class="text-red">Features added by <a href="https:\\blog.simeedun.com" target="_blank">Meedun</a></p>
</div>
<?php exit(); ?> 


