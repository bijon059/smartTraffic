<?php
	$UIDresult=$_POST["UIDresult"];
	$UIDresult=base64_encode($UIDresult);
	$Write="<?php $" . "UIDresult='" . $UIDresult . "'; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>
