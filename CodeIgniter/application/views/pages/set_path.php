<?php

function put_path() {
	$page = $_SERVER['REQUEST_URI'];
    $page = str_replace("/CodeIgniter/Myclass/index/", "",$page);
	$page = str_replace(".html", "",$page);
	
	echo "<ol class='breadcrumb'><li>";
	echo anchor('',"Home");
	echo "</li><li class='active'>".$page."</li>
			</ol>";
}

?>