<?php
error_reporting(E_ALL);

$title = 'Data Login';
include_once 'login_session.php';
include_once 'koneksi.php';

if (isset($_POST['submit']))
{
		$jenis_kelamin = $_POST['jenis_kelamin'];
 		$nama = $_POST['nama'];
 		$alamat = $_POST['alamat'];
 		$hobby = $_POST['hobby'];
 		$umur = $_POST['umur'];
 		$file_gambar = $_FILES['file_gambar'];
 		$gambar = null;

if ($file_gambar['error'] == 0)
{
$filename = str_replace(' ', '_', $file_gambar['name']);
$destination = dirname(__FILE__) . '/gambar/' . $filename;
if (move_uploaded_file($file_gambar['tmp_name'], $destination))
{
$gambar = 'gambar/' . $filename;;
}
}

$sql = mysql_query("UPDATE user SET 
	jenis_kelamin = '$jenis_kelamin'
	nama	='$nama', 
	alamat='$alamat' , 
	hobby='$hobby', 
	umur='$umur',  
	file_gambar='$file_gambar' WHERE id='$id'");
$sql .= "jenis_kelamin = '{$jenis_kelamin}', nama = '{$nama}', alamat = '{$alamat}', ";
$sql .= "hobby = '{$hobby}', umur = '{
$umur}' ";
if (!emptyempty($gambar))
$sql .= ", gambar = '{$gambar}' ";
$sql .= "WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);

header('location: index2.php');
}

$nama = $_GET['nama'];
$sql = "SELECT * FROM biodata WHERE nama = '{$nama}'";
$result = mysqli_query($conn, $sql);
if (!$result) die('Error: Data tidak tersedia');
$data = mysqli_fetch_array($result);

function is_select($var, $val) {
if ($var == $val) return 'selected="selected"';
return false;
}

include_once 'header.php';
?>

<h2>Ubah Barang</h2>
<form method="post" action="edit_barang.php" enctype="multipart/form-data">
<div class="input">
<label>Kategori</label>
<select name="jenis_kelamin">
<option value="laki-laki" <?php echo is_select('laki-laki', $data['jenis_kelamin']);?>>laki-laki</option>
<option value="perempuan" <?php echo is_select('perempuan', $data['jenis_kelamin']);?>>perempuan</option>
</select>
</div>
<div class="input">
<label>Nama</label>
<input type="text" name="nama" value="<?php echo $data['nama'];?>" />
</div>
<div class="input">
<label>alamat</label>
<input type="text" name="alamat" value="<?php 
echo $data['alamat'];?>" />
</div>
<div class="input">
<label>Hobby</label>
<input type="text" name="hobby" value="<?php
echo $data['hobby'];?>" />
</div>
<div class="input">
<label>umur</label>
<input type="text" name="umur" value="<?php echo $data['umur'];?>" />
</div>
<div class="input">
<label>File Gambar</label>
<input type="file" name="file_gambar" />
</div>
<div class="submit">
<input type="hidden" name="nama" value="<?php echo $data['nama'];?>" />
<input type="submit" name="submit" value="Simpan"/>
</div>
</form>
<?php
include_once 'koneksi.php';
?>