<?php

$db = mysql_connect("sql.mit.edu","edethy","Yahoo1");
if (!$db){
    die('Could not connect:'. mysql_error());
}
mysql_select_db("edethy+6470site",$db) or die(mysql_error());

$query = "SELECT title, text, username FROM journals INNER JOIN users on journals.user_id = users.user_id";

$result = mysql_query($query,$db);

while($row = mysql_fetch_assoc($result)){
  echo "This is a title: ".$row['title']."<br \>";
	echo "Written by: ".$row['username']."<br \>";
	echo "Text".$row['text']."<br \><br \>";
}


?>
