<!-- PHP --> 
<?php
if(isset($_POST['valores'])){
	$valores = array();
	parse_str($_POST['valores'],$valores);
	echo '<pre>';
	print_r($valores);
	exit();
}
?>