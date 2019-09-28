<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=ExportAmelya.xls")
	?>
	<center>
		<h1>Export Data Ke Excel Dengan PHP <br/></h1>
	</center>
 
	<center>
		<a target="_blank" href="export_excel.php">EXPORT KE EXCEL</a>
	</center>
 
	<table>
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jurusan</th>
			<th>Fakultas</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1805010602</td>
			<td>Hazzam Atha Alfarezi</td>
			<td>LAKI-LAKI</td>
			<td>TEKNIK INFORMATIKA</td>
			<td>IT</td>
		</tr>
		<tr>
			<td>2</td>
			<td>2147483647</td>
			<td>Aqilla Fariza Mufia Putri</td>
			<td>PEREMPUAN</td>
			<td>PERTANIAN</td>
			<td>EKONOMI</td>
		</tr>
		<tr>
			<td>3<td>
			<td>1718104858</td>
			<td>Amelya Putri</td>
			<td>PEREMPUAN</td>
			<td>TEKNIK SIPIL</td>
			<td>HUKUM</td>
		</tr>
	</table>
</body>
</html>