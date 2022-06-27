<?php
$kata_kunci = $_POST['kata_kunci'];
ob_start();
include "view2.php";
$html = ob_get_contents();
ob_end_clean();
echo json_encode(array('hasil'=>$html));
?>
