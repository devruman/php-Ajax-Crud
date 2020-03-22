<?php require_once "db_connection.php"; ?>
<?php
	$result = mysqli_query($db_config, "SELECT * FROM person");
?>
<div id="main_content">
	<table id="data-table">
		<thead>
			<th>Name</th>
			<th>Age</th>
			<th>Profession</th>
			<th>Settings</th>
		</thead>
		<tbody>
			<?php
				$row_num = 1;
				while ($row = mysqli_fetch_array($result))
				{
					echo '<tr><td>'.$row[1].'</td>';
					echo '<td>'.$row[2].'</td>';
					echo '<td>'.$row[3].'</td>';
					echo '<td><button id="edit" onclick="editdata('.$row[0].','.$row_num.')"><img src="icon/edit.svg" height=17 /></button><button id="delete" onclick="deletedata('.$row[0].')" ><img src="icon/trash.svg" height=18 /></button></td></tr>';
					$row_num++;
				}
			?>
		</tbody>
	</table>
</div>