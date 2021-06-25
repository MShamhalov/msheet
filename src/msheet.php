<?php
$string = file_get_contents("msheet.json");
$shipments = json_decode($string, true);
$table = $_GET['sheet'];

if(isset($shipments[$table])){
	foreach($shipments[$table] as $current){
		if(gettype($current) == 'array'){
			foreach($current as $cuser){
				echo $cuser . " ";
			}
		}
		else echo $current . " ";
	}

	
echo '<table class="table table-hover table-sm table-striped">';
echo '<thead>';
echo '<tr>';
	//foreach($shipments['columns'] as $current){
	//	echo "<th>$current</th>";
	//}
echo '</tr>';

echo '<tr>';
	//foreach($shipments['columns'] as $current){
	//	echo "<th>$current</th>";
	//}
echo '</tr>';

echo '<tbody>';
echo '</table>';
	}
else {
	echo 'Нет формы отображения для текущей таблицы <br /><br />';
	echo 'Тут должен быть код, который самостоятельно анализирует таблицу, и если она существует в БД, создает для ее форму Default (с именем таблицы как в БД)';
}
?>