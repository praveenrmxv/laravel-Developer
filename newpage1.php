<?php

$u= $_REQUEST['user'];
$p=$_REQUEST['pass'];
$r1=$_REQUEST['r'];
$D=$_REQUEST['dept'];
$L=" ";
if(isset($_POST['c1']))
{
$L=$L." " .$_POST['c1'];
}
if(isset($_POST['c2']))
{
    $L=$L." " .$_POST['c2'];

}
?>
<table border="1">
<tr>
<td> Name</td>
<td>Address</td>
<td>Gender</td>
<td>language</td>
<td>Department</td>


</tr>
<tr>
<td><?php echo $u; ?></td>
<td><?php echo $p; ?></td>
<td><?php echo $r1; ?></td>
<td><?php echo $L; ?></td>
<td><?php echo $D; ?></td>




</tr>
</table>