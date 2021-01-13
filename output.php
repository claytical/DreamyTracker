<?php
	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename=output.csv");
	header("Pragma: no-cache");
	header("Expires: 0");

	require 'database.php';



$sessions = $database->select("sessions", [
		"id",
		"username",
		"psid",
		"pid",
		"updated_at",
		"created_at"
		], 
	[
//	"post.user_id" => 100,
	"ORDER" => "created_at ASC"
//	"LIMIT" => 50
	]);

	echo "id,username,psid,pid,updated_at,created_at\n";
	foreach($sessions as $session) {
		echo implode($session, ",");
		echo "\n";
		
	}
?>