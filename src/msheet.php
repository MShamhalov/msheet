<?php
$string = file_get_contents("config.json");
$shipments = json_decode($string, true);
$table = $_GET['component'];

if (isset($_GET['view']))
	$view = $_GET['view'];
else $view = 'default';



//echo $shipments["user"]["name"] . "<br/>";



echo '<table class="table table-hover table-sm table-striped">';
echo '<thead>';
	//Перебор строк
	echo '<th>'; 
	//Перебор полей
	foreach($shipments["user"]['views'][$view] as $current){
		echo '<td>'; 
			echo $current. "<br />";
		echo '</td>';
	}
	echo '</th>'; 
echo '</thead>';
echo '<tbody>';

echo '</tbody>';
echo '</table>';
/*
if(isset($shipments[$table])){
	foreach($shipments[$table] as $current){
		if(gettype($current) == 'array'){
			foreach($current as $cuser){
				/*
				if(gettype($cuser) == 'array'){
					foreach($cuser as $cdata){
						echo $cdata . " ";
					}
				}
				
			}
		}
		//else echo $current . " ";
	}
*/
?>