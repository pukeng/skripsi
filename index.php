<?php
include('header.php');

@$hal = $_GET['hal'];
if (isset($hal)) {
	if ($hal=='data')
        require_once("data.php");	
    if ($hal=='chart')
		require_once("chart.php");	
}else{
	require_once("dashboard.php");
}

include('footer.php');
?>