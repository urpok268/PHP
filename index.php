<?php
$events = [[]];
require 'connect.php';
$result = pg_query($dbconn, 'SELECT event, day, month, year, to_char(time, \'HH24:MI\') FROM public."eventTable" ORDER BY day, month, year, time;');
while ($row = pg_fetch_row($result)){
	if ($row[1]>0){
		$editData = $row[1].'.'.$row[2].'.'.$row[3];
		$events[$editData][$row[4]] = $row[0];
	}
}
pg_free_result($result);
pg_close($dbconn);
echo '<link rel="stylesheet" href="css/bootstrap.min.css">';
echo '<link rel="stylesheet" href="css/style.css">';
echo '<link media="screen and (min-width: 760px)" rel="stylesheet" href="css/style0.css">';
echo '<link media="screen and (min-width: 1150px)" rel="stylesheet" href="css/style1150.css">';
echo '<script> var map = new Map(); ';
foreach ($events as $key => $value) {
	if ($key){
	echo 'map.set("'.$key.'", new Map());';
	foreach ($events[$key] as $key2 => $value2)
		echo '
			map.get("'.$key.'").set("'.$key2.'", "'.$value2.'");
		';
	}
}
echo '</script>';
echo '<script src="js/script.js"></script>';
if (isset($_POST["year"])){
	if ($_POST["yearChange"] == '<') $year = $_POST["year"]-1;
	else if ($_POST["yearChange"] == '>') $year = $_POST["year"]+1;
	else $year = $_POST["year"];
	if (isset($_POST["month"])){
		$months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
		for ($i = 0; $i < 12; $i++)
			if ($months[$i] == $_POST["month"])
				echo '<script>
					window.onload = function(){
						printCalendar('.($i+1).', '.$year.', map);
					}
					</script>';
	} else
	echo '<script>
	window.onload = function(){
		let date = new Date();
		printCalendar(date.getMonth(), date.getFullYear(), map);
	}
	</script>';
} else
	echo '<script>
	window.onload = function(){
		let date = new Date();
		printCalendar(date.getMonth()+1, date.getFullYear(), map);
	}
	</script>';

?>
