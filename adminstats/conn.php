<?php

### EDIT HERE ###

// DB CONNECT INFO
$db_host = "localhost";
$db_name = "id20111042_scholarship_admin_db";
$db_user = "id20111042_root";
$db_pw = "A2Z_Blogsite";

// DB TABLE INFO
$GLOBALS['hits_table_name'] = "page_hits";
$GLOBALS['info_table_name'] = "visitor_info";

### STOP EDITING HERE ###

 $GLOBALS['db'] = mysqli_connect("localhost","id20111042_root","A2Z_Blogsite","id20111042_scholarship_admin_db");
// CONNECT TO DB
//try {
//	$GLOBALS['db'] = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pw, array(PDO::ATTR_PERSISTENT //=> false, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false));
//}
//catch(PDOException $e) {
 //   echo $e->getMessage();
//}

?>
