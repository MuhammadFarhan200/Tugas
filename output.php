<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
<h3>Menampilkan Output Array</h3>
<ol><?php
$array_mahasiswa = $_POST['mahasiswa'];
for ($a=1; $a <=2 ; $a++) {
echo "<li>".$array_mahasiswa[$a]."</li>";}
?></ol>
</body>
</html>
