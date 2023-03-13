<!DOCTYPE html>
<html>
<head>
	<title>Registered Users</title>
	<style>
		
		table {
			border-collapse: collapse;
			width: 50%;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border: 1px solid black;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>Registered Users</h1>
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Profile Picture</th>
  </tr>
  
	<?php
		if (($handle = fopen("users.csv", "r")) !== FALSE) {
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE){?>
						<tr>
						<?php
							echo "<td>{$data[0]}</td>";
							echo "<td>{$data[1]}</td>";
							echo "<td><img src='uploads/{$data[2]}'</td>";
						?>
						</tr>
					<?php
				}
			}                 
	?>
  
</table>
    </body>
 </html>