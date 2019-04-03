<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	ID : <?=$id?><br>
	<form action="/test/form/add" method="post">
		<p>
			<label>Nama</label>
			<input type="text" name="nama">
		</p>

		<p>
			<label>Data</label>
			<input type="text" name="data">
		</p>

		<p>
			<label>Tanggal</label>
			<input type="date" name="tanggal">
		</p>

		<p>
			<input type="submit" name="submit" value="Kirim">
		</p>
		
	</form>
</body>
</html>