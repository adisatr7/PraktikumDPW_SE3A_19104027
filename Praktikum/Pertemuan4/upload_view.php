<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload Gambar</title>
</head>
<body>
	<!--membuat form yang akan di proses pada upload_process.php-->
	<form action="upload_process.php" method="post" enctype="multipart/form-data">
		Pilih Gambar:
		<!--form pengisian jenis file yang memiliki parameter "gambar_contoh-->
		<input type="file" name="gambar_contoh" id="gambar_contoh">
		<input type="submit" name="submit">
	</form>
</body>
</html>