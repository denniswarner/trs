<?php
header('Content-Disposition: inline');

include("download_inc.php");
$str=$_GET['str'];

$downloadfile = new DOWNLOADFILE($str);
 if (!$downloadfile->df_download()) echo "Sorry, we are experiencing technical difficulties downloading this file. Please report this error to Technical Support.";
?>
