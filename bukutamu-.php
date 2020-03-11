<html>
<head>
<title>Buku Tamu</title>
</head>
<body>
<fieldset>
<h1 align="center">BUKU TAMU</h1>>
<form action="simpan-.php" method="post">
<p>Nama &nbsp;&nbsp;&nbsp;&nbsp;:
<input placeholder="Nama lengkap anda" type="text" name="nama" required/>
</p>
<p>Email  &nbsp;&nbsp;&nbsp;&nbsp;:
<input placeholder="tiarakm28@gmail.com" type="text" name="email"/>
</p>
<p>Isi:
<textarea placeholder="Ketikan pesan anda" cols="90" rows="10" name="isi" required></textarea>
</p>
<p>
<input type="submit" value="Simpan"/>
</p>
</form>
<?php
include("koneksi-.php");
$query=mysqli_query($koneksi,'select * from bukutamu');
while($data=mysqli_fetch_array($query))
{
$nama = $data['nama'];
$email= $data['email'];
$isi = $data['isi'];
echo "
<b>$nama</b>
<br/>
<a class='kecil' title='Kirim Email' href='mailto:$email'>[EMAIL]</a>
<br/>
<i class='ganti'>'$isi'</i>
<br/>
";}
?>
</fieldset>
</body>
</html>