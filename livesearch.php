<?php 
$str=$_GET['q'];
$rowcount=$_GET['y'];


?><table class="mb-0 table table-hover">
	<tr >
		<td id="33" onclick="clisk('33','<?php echo $str; ?>','84848','<?php echo $rowcount; ?>')">5456</td>
	</tr>
	<tr>
		<td id="33" onclick="clisk('33','<?php echo $str; ?>','84848','<?php echo $rowcount; ?>')">5456</td>
	</tr>
	<tr>
		<td>5456</td>
	</tr>
	<tr>
		<td>5456</td>
	</tr>
	<tr>
		<td>5456</td>
	</tr>
	<tr>
		<td>5456</td>
	</tr>
</table>


<?php 
$result = $_POST['Designation'];

  $i=0;
  for ($i=0; $i <2 ; $i++) { 
  	echo $result[$i].'jacob';echo $i;
  }
  
foreach ($_POST['Designation'] as $value) {
	echo $value."<br>";
	echo $i;
	$i++;
}


?>
