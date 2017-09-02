<?php 
    include('../config.php');

    //adapater

    $ad_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_adapaters`");
    
    while ($ad_row = mysql_fetch_array($ad_sql)) {

        $ad_tot = $ad_row[0];      
    }

    
    //board

    $bo_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_board`");
    
    while ($bo_row = mysql_fetch_array($bo_sql)) {

        $bo_tot = $bo_row[0];    
    }

    //bugstrip

    $bu_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_bugstrip`");
    
    while ($bu_row = mysql_fetch_array($bu_sql)) {

        $bu_tot = $bu_row[0];    
    }
    
    //cables

    $ca_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_cables`");
    
    while ($ca_row = mysql_fetch_array($ca_sql)) {

        $ca_tot = $ca_row[0];    
    }

//connectors

    $co_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_connectors`");
    
    while ($co_row = mysql_fetch_array($co_sql)) {

        $co_tot = $co_row[0];    
    }

    //controller

    $con_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_controller`");
    
    while ($con_row = mysql_fetch_array($con_sql)) {

        $con_tot = $con_row[0];    
    }
    //converter

    $cv_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_convertr`");
    
    while ($cv_row = mysql_fetch_array($cv_sql)) {

        $cv_tot = $cv_row[0];    
    }
    //diodes

    $di_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_diodes`");
    
    while ($di_row = mysql_fetch_array($di_sql)) {

        $di_tot = $di_row[0];    
    }
    //glue

    $gl_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_glue`");
    
    while ($gl_row = mysql_fetch_array($gl_sql)) {

        $gl_tot = $gl_row[0];    
    }
    //leds

    $le_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_leds`");
    
    while ($le_row = mysql_fetch_array($le_sql)) {

        $le_tot = $le_row[0];    
    }
    //meters

    $met_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_meters`");
    
    while ($met_row = mysql_fetch_array($met_sql)) {

        $met_tot = $met_row[0];    
    }
    //modules

    $mod_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_modules`");
    
    while ($mod_row = mysql_fetch_array($mod_sql)) {

        $mod_tot = $mod_row[0];    
    }
    
    //moters

    $mot_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_motors`");
    
    while ($mot_row = mysql_fetch_array($mot_sql)) {

        $mot_tot = $mot_row[0];    
    }

//potiomets

    $pot_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_potiomets`");
    
    while ($pot_row = mysql_fetch_array($pot_sql)) {

        $pot_tot = $pot_row[0];
        if($pot_tot==0){
            $pot_tot = 0;
        }    
    }
//processor

    $pro_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_processor`");
    
    while ($pro_row = mysql_fetch_array($pro_sql)) {

        $pro_tot = $pro_row[0];    
    }
//rectifierss

    $rec_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_rectifiers`");
    
    while ($rec_row = mysql_fetch_array($rec_sql)) {

        $rec_tot = $rec_row[0];

        if($rec_tot==0){
            $rec_tot = 0;
        }    
    }

//relay

    $rel_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_relay`");
    
    while ($rel_row = mysql_fetch_array($rel_sql)) {

        $rel_tot = $rel_row[0];

        if($rec_tot == 0){
            $rec_tot = 0;
        }    
    }

//Resistors

    $res_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_resistors`");
    
    while ($res_row = mysql_fetch_array($res_sql)) {

        $res_tot = $res_row[0];    
    }

//Sensors

    $sen_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_sensors`");
    
    while ($sen_row = mysql_fetch_array($sen_sql)) {

        $sen_tot = $sen_row[0];    
    }
//soldering

    $sol_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_soldering`");
    
    while ($sol_row = mysql_fetch_array($sol_sql)) {

        $sol_tot = $sol_row[0];    
    }
//storage
    $sto_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_storage`");
    
    while ($sto_row = mysql_fetch_array($sto_sql)) {

        $sto_tot = $sto_row[0];    
    }
//Transistors
    $tra_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_transistors`");
    
    while ($tra_row = mysql_fetch_array($tra_sql)) {

        $tra_tot = $tra_row[0];    
    }
//wires
    $wi_sql = mysql_query("SELECT SUM(num_comp) FROM `comp_wires`");
    
    while ($wi_row = mysql_fetch_array($wi_sql)) {

        $wi_tot = $wi_row[0];    
    }
   


//fetching complete data

    $adapters_sql = mysql_query("SELECT * FROM `comp_adapaters`");
    
    $boards_sql = mysql_query("SELECT * FROM `comp_board`");
    
    $bugstrips_sql = mysql_query("SELECT * FROM `comp_bugstrip`");
    
    $cables_sql = mysql_query("SELECT * FROM `comp_cables`");
    
    $connectors_sql = mysql_query("SELECT * FROM `comp_connectors`");
    
    $controllers_sql = mysql_query("SELECT * FROM `comp_controller`");
    
    $converters_sql = mysql_query("SELECT * FROM `comp_convertr`");
    
    $diodes_sql = mysql_query("SELECT * FROM `comp_diodes`");
    
    $glue_sql = mysql_query("SELECT * FROM `comp_glue`");
    
    $leds_sql = mysql_query("SELECT * FROM `comp_leds`");
    
    $meters_sql = mysql_query("SELECT * FROM `comp_meters`");
    
    $modules_sql = mysql_query("SELECT * FROM `comp_modules`");
    
    $motors_sql = mysql_query("SELECT * FROM `comp_motors`");
    
    $potentiometers_sql = mysql_query("SELECT * FROM `comp_potiomets`");
    
    $processors_sql = mysql_query("SELECT * FROM `comp_processor`");

    $rectifiers_sql = mysql_query("SELECT * FROM `comp_rectifiers`");

    $resistors_sql = mysql_query("SELECT * FROM `comp_resistors`");
    
    $relay_sql = mysql_query("SELECT * FROM `comp_relay`");

    $sensors_sql = mysql_query("SELECT * FROM `comp_sensors`");

    $soldering_sql = mysql_query("SELECT * FROM `comp_soldering`");

    $storage_sql = mysql_query("SELECT * FROM `comp_storage`");

    $transistors_sql = mysql_query("SELECT * FROM `comp_transistors`");

    $wires_sql = mysql_query("SELECT * FROM `comp_wires`");
?>

<!-- number of requests-->
<?php 

    $result=mysql_query("SELECT * FROM requests WHERE status = 'Waiting' ");

    $num_rows = mysql_num_rows($result);

?>

<!-- fetch all requests-->
