	<?php
 	error_reporting(E_ALL);

	$title = 'biodata';
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

 		  if ($file_gambar['error'] == 0) {
        $filename = str_replace(' ', '_', $file_gambar['name']);
        $destination = dirname(__FILE__) . '/gambar/' . $file_name;

        if (move_uploaded_file($file_gambar['tmp_name'], $destination)) {
            $gambar = 'gambar/' . $filename;
        }
    }


 $sql = 'INSERT INTO biodata (jenis_kelamin, nama, alamat, hobby, umur, gambar)';
 $sql .= "VALUE ('{$jenis_kelamin}', '{$nama}', '{$alamat}', '{$hobby}', '{$umur}', '{$gambar}')";
 $result = mysqli_query($conn, $sql);

 header('location: index2.php');
}
 include_once 'header.php';
 ?>

 <h2>Tambah Biodata</h2>
 <form method="post" action="tambah_barang.php" 
enctype="multipart/form-data">
 <div class="input">
 <label>jenis_kelamin</label>
 <select name="jenis_kelamin">
 <option 
value="Laki-Laki">Laki-Laki</option>
 <option 
value="Perempuan">perempuan</option>
 </select>
 </div>
 <div class="input">
 <label>Nama</label>
 <input type="text" name="nama" />
 </div>
 <div class="input">
 <label>alamat</label>
 <input type="text" name="alamat" />
 </div>
 <div class="input">
 <label>Hobby</label>
 <input type="text" name="hobby" />
 </div>
 <div class="input">
 <label>umur</label>
 <input type="text" name="umur" />
 </div>
 <div class="input">
 <label>File Gambar</label>
 <input type="file" name="file_gambar" />
 </div>
 <div class="submit">
 <input type="submit" name="submit" 
value="Simpan" />
 </div>
 </form>
 <?php
 include_once 'footer.php';
 ?>