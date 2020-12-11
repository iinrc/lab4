<?php
  $mysqli = new mysqli('localhost', 'root', '', 'Whitelist');
  $result=$mysqli->query('SELECT * FROM `books`', );

  while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
									{  
									  	 // выводим данные
									 	echo '<tr><td>'.$row['Author'].'</td>';
										echo '<td>'.$row['Title'].'</td>';
										echo '<td>'.$row['Genre'].'</td>';
									 	echo '<td>'.$row['Amount'].'</td>';
									 	echo '<td>'.$row['Date'].'</td></tr>';
									}
?>