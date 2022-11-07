	<!-- cek apakah sudah login -->
	<?php 
		require_once("../auth.php"); 

		//bangun koneksi ke database
		include ("../config/config.php");

		include ("../load_header_dosen.php");
	?>


	<div class="content">
  <?php if(isset($_GET['status'])): ?>
		<p>
		<?php
		echo "<center>";
			if($_GET['status'] == 'sukses'){

			echo "<h6>Penambahan data berhasil!</h6>";
			echo '<img width="100" src="../assets/images/success-icon.gif"> ';
			} else {
				echo "Penambahan gagal!";
			}
		echo "</center>";
		?>
		</p>
	<?php endif; ?>
  <a class="up btn btn-success" href="../form/form_add_dosen.php"> Add Dosen +++</a>
		<table class="table table-hover">
		<thead>
			<tr class="tr">
				<th class="satu">No</th>
				<th hidden>Nik</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Skill</th>
				<th>Mau Diapain</th>
			</tr>
		</thead>
		<tbody>
			
			<?php
			$sql = "SELECT * FROM dosen";
			$query = mysqli_query($sambung, $sql);
			$nomor = 1;		
			while($dosen = mysqli_fetch_array($query)){
				echo "<tr>";
				echo "<td>".$nomor."</td>";
				echo "<td hidden>".$dosen['nik_dos']."</td>";
				echo "<td>".$dosen['nm_dos']."</td>";
				echo "<td>".$dosen['almt_dos']."</td>";
				echo "<td>".$dosen['jkl_dos']."</td>";
				echo "<td>".$dosen['skl_dos']."</td>";
					echo "<td>";
					echo "<a href='../form/form_edit_dosen.php?nik=".$dosen['nik_dos']."'>Edit</a> | ";
					echo "<a href='../controller/ctrl_hapus.php?nik=".$dosen['nik_dos']."'>Hapus</a>";
					echo "</td>";
				echo "</tr>";
				$nomor++;
			}				
			?>		
		</tbody>
	</table>
	</div>

</body>
</html>
