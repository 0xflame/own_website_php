<?php

function put_path() {
	$page = $_SERVER['REQUEST_URI'];
    $page = str_replace("/KLEIN/", "",$page);
	$page = str_replace(".php", "",$page);
	
	echo "<ol class='breadcrumb'>
			<li><a href='index.php'>Home</a></li>";
	echo "<li class='active'>".$page."</li>
			</ol>";
}

?>