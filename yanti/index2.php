<?php

 $title = 'Biodata';
 include_once 'header.php';
 include_once 'koneksi.php';

 echo '<a href="tambah_barang.php" class="btn btn-large">Tambah Biodata</a>';
?>

<form action="" method="get">
	<label for="q">Cari data:</label>
	<input type="text" id="q" name="q" class="input-q" value="<?php echo $q?>">
	<input type="submit" name="submit" value="Cari" class="btn btn-primary">

</form>


<?php 
$q="";
if(isset($_GET['submit']) && !empty($_GET['q'])){
	$q = $_GET['q'];
	$sql_where = "SELECT * from biodata where nama like '%" .$q. "%'";
}
	$title = 'biodata';
	include_once 'koneksi.php';
	$sql = 'SELECT *from biodata';

	if (isset($sql_where))
		$sql .=$sql_where;
 $result = mysqli_query($conn, $sql);

 include_once 'header.php';




 if ($result):?>
 <table>
 <tr>
 <th>gambar</th>
 <th>nama</th>
 <th>jenis_kelamin</th>
 <th>alamat</th>
 <th>Hobby</th>
 <th>umur</th>
 <th>Aksi</th>
 </tr>

 <?php 

 while($row = mysqli_fetch_array($result)): ?>
 <tr>
 <td><?php echo "<img src=\"{$row['gambar']}\" />";?></td>
 <td><?php echo $row['nama'];?></td>
 <td><?php echo $row['jenis_kelamin'];?></td>
 <td><?php echo $row['alamat'];?></td>
 <td><?php echo $row['hobby'];?></td>
 <td><?php echo $row['umur'];?></td>
 <td>
 <a href="edit_barang.php?nama=<?php echo $row['nama'];?>">Edit</a>
 <a href="hapus_barang.php?nama=<?php echo $row['nama'];?>">Delete</a>



 </td>
 </tr>
 <?php endwhile; ?>
 </table>
 <?php endif;

 include_once 'footer.php';
 ?>