<?php
		
include_once('../config.php');

$data=mysql_real_escape_string($_GET['comp_type']);

if($data === 'Controller'){	 

$sql = "select num_comp,comp_name from comp_controller";

$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {

	
    while ($row = mysql_fetch_array($result)) {
        ?>	
                <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }

}
}
elseif($data === 'Storage'){	 

$sql = "select num_comp,comp_name from comp_storage";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Relay'){	 

$sql = "select num_comp,comp_name from comp_relay";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Cables'){	 

$sql = "select num_comp,comp_name from comp_cables";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
                  <td><?php echo $row['comp_name'] ?></td>
         </tr>
        <?php
    }
}
}
elseif($data === 'Processor'){	 

$sql = "select num_comp,comp_name from comp_processor";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}

elseif($data === 'Module'){	 

$sql = "select num_comp,comp_name from comp_modules";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Board'){	 

$sql = "select num_comp,comp_name from comp_board";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Glue'){	 

$sql = "select num_comp, comp_name from comp_glue";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Diod'){	 

$sql = "select num_comp, comp_name from comp_diodes";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Adapter'){	 

$sql = "select num_comp, comp_name from comp_adapaters";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Meter'){	 

$sql = "select num_comp, comp_name from comp_meters";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Wire'){	 

$sql = "select num_comp, comp_name from comp_wires";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'LED'){	 

$sql = "select num_comp, comp_name from comp_leds";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Transistor'){	 

$sql = "select num_comp, comp_name from comp_transistors";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Potentiometr'){	 

$sql = "select num_comp, comp_name from comp_potiomets";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Converter'){	 

$sql = "select num_comp, comp_name from comp_convertr";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Capacitors'){	 

$sql = "select num_comp, comp_name from comp_capacitors";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Connectors'){	 

$sql = "select num_comp, comp_name from comp_connectors";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Sensors'){	 

$sql = "select num_comp, comp_name from comp_connectors";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Bug Strips'){	 

$sql = "select num_comp, comp_name from comp_bugstrip";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Moters'){	 

$sql = "select num_comp, comp_name from comp_motors";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}
elseif($data === 'Soldering'){	 

$sql = "select num_comp, comp_name from comp_soldering";
$result = mysql_query($sql) or die(mysql_error()); 
If (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        ?>	
          <tr class="active" >
<td id="<?php echo $row['comp_name'] ?>" onclick="compname(this);" data-dismiss="modal">
    <?php echo $row['comp_name'] ?>
</td>
                </tr>
        <?php
    }
}
}


?>