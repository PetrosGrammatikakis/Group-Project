<?php
include 'connects.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Εμφάνιση Δεδομένων</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
		}

		#center {
			text-align: center;
			margin-top: 20px;
		}

		table {
			border-collapse: collapse;
			width: 80%;
			margin: auto;
			background-color: white;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		th,
		td {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 12px;
		}

		th {
			background-color: #f2f2f2;
		}

		button {
			margin-top: 20px;
			padding: 12px 20px;
			font-size: 16px;
			background-color: #4caf50;
			color: white;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		button:hover {
			background-color: #45a049;
		}
	</style>
</head>

<body>

	<div id="center">
	<h2>E8NOS Table</h2>
		<table>
			<thead>
				<tr>
					<th width=80>E8NOS_ID</th>
					<th width=80>GLWSSA_E8</th>
					<th width=80>ONOMA_E8NOS</th>
					<th width=80>HMEROMINIA_IDRISIS</th>
					<th width=80>HMEROMINIA_KATASTROFIS</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Σύνταξη Ερωτήματος για την εμφάνιση δεδομένων
				$qry = "SELECT * FROM E8NOS";

				// Εκτέλεση Ερωτήματος
				$result = mysqli_query($conne, $qry);

				// Παρουσίαση αποτελεσμάτων Ερωτήματος
				while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
					echo "<tr>
                            <td>{$row[0]}</td>
                            <td>{$row[1]}</td>
                            <td>{$row[2]}</td>
                            <td>{$row[3]}</td>
                            <td>{$row[4]}</td>
                          </tr>";
				}
				?>
			</tbody>
		</table>

	
	<h2>BASEILIA Table</h2>
	<table >
		<thead>
			<tr>
				<th width=80>BASILIA_ID</th>
				<th width=80>PROTEYOUSA</th>
				<th width=80>GLWSSA_BAS</th>
				<th width=80>HMEROMINIA_DIMIOURGIAS</th>
				<th width=80>HMEROMINIA_KATASTROFHS</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Σύνταξη Ερωτήματος για την εμφάνιση δεδομένων από τον πίνακα BASEILIA
			$qryBaseilia = "SELECT * FROM BASEILIA";
			$resultBaseilia = mysqli_query($conne, $qryBaseilia);

			while ($rowBaseilia = mysqli_fetch_array($resultBaseilia, MYSQLI_NUM)) {
				echo "<tr>
                            <td>{$rowBaseilia[0]}</td>
                            <td>{$rowBaseilia[1]}</td>
                            <td>{$rowBaseilia[2]}</td>
                            <td>{$rowBaseilia[3]}</td>
                            <td>{$rowBaseilia[4]}</td>
                          </tr>";
			}
			?>
		</tbody>
	</table>

	<h2>PROSWPO Table</h2>
	<table>
		<thead>
			<tr>
				<th width=80>KWDIKOS</th>
				<th width=80>ONOMA</th>
				<th width=80>EPI8ETO</th>
				<th width=80>ETOS_GENISIS</th>
				<th width=80>ETOS_THANATOU</th>
				<th width=80>TOPOS_GENISIS</th>
				<th width=80>BASILIO_PR</th>
				<th width=80>E8NOS_PR</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Σύνταξη Ερωτήματος για την εμφάνιση δεδομένων από τον πίνακα PROSWPO
			$qryProswpo = "SELECT * FROM PROSWPO";
			$resultProswpo = mysqli_query($conne, $qryProswpo);

			while ($rowProswpo = mysqli_fetch_array($resultProswpo, MYSQLI_NUM)) {
				echo "<tr>
                            <td>{$rowProswpo[0]}</td>
                            <td>{$rowProswpo[1]}</td>
                            <td>{$rowProswpo[2]}</td>
                            <td>{$rowProswpo[3]}</td>
                            <td>{$rowProswpo[4]}</td>
                            <td>{$rowProswpo[5]}</td>
                            <td>{$rowProswpo[6]}</td>
                            <td>{$rowProswpo[7]}</td>
                          </tr>";
			}
			?>
		</tbody>
	</table>

	<button onclick="location.href = 'index.php';"> Επιστροφή </button>
	</div>

</body>

</html>