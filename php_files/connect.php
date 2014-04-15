 <?php
 include 'constant.php';
$link = mysql_connect($host,$sqlname,$sqlpass);
if (!$link){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db($dbname,$link);
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}

?>