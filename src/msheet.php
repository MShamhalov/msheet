<?php
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">';
echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>';

require_once '../../db_connect.php';

$string = file_get_contents("config.json");
$shipments = json_decode($string, true);
$table = $_GET['component'];

if (isset($_GET['view']))
	$view = $_GET['view'];
else $view = 'default';

$query_main = "SELECT * FROM sys_user LIMIT 0, 15;";
$result_main = $pdo->query($query_main);
echo '<div class="main_frame">';
echo '<table class="table table-hover table-sm table-striped">';
echo '<thead>';
	//Перебор полей
	foreach($shipments["user"]['views'][$view] as $current){
		echo '<th>'; 
			echo $current;
		echo '</th>';
	}

echo '</thead>';
echo '<tbody>';
		foreach($result_main  as $current){
			echo '<tr>';
			foreach ($shipments["user"]['views'][$view] as $ctd){
				echo '<td>' . $current[$ctd] . '</td>';
			}
			echo '</tr>';
		}
echo '</tbody>';
echo '</table>';
echo '</div>'
?>