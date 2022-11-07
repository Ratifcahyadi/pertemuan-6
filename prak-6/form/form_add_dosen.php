<?php
//session_start();
require_once("../auth.php"); 
include("../config/config.php");
include ("../load_header_dosen.php");
?>
	
	
	<!--============================================== Batas Atas ==============================-->
	<div class="content">
		<header>
		<h3>Form Tambah Users</h3>
	</header>
	<!--Memasukan data ke database <insert>-->
	<form action="../controller/ctrl_tambah.php" method="POST">
		<table class="table">
		<fieldset>	
			<tr>
				<td class="kecilin"><label for="nik">NIK</label></td>
				<td>: <input class="input" type="text" name="nik" placeholder="Masukan Nik"/>
				</td>
				<td rowspan="5"><img src="../bootstrap/images/image-not.png" class="dosen-wanita" alt="Firman Asharudin"> </td>
			</tr>
			<tr>
				<td class="kecilin"><label for="nama_dosen">Nama Dosen</label></td>
				<td class="td">: <input class="input" type="text" name="nama_dosen" placeholder="Nama lengkap"/>
				</td>
			</tr>
			<tr>
				<td class="kecilin"><label for="alamat_dosen">Alamat Dosen</label></td>
				<td>: <textarea class="input" name="alamat_dosen"></textarea></td>
			</tr>
			<tr>
				<td class="kecilin"><label for="jenis_kelamin">Jenis Kelamin</label></td>
				<td>: <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
				<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label></td>
			</tr>
			<tr>
				<td class="kecilin"><label for="skill_dosen">Skill Dosen</label></td>
				<td class="td" >: <select name="skill_dosen">
					<option>Nyuntik Pasta Prosesor</option>
					<option>Ngerawat Virus</option>
					<option>Operasi Casing</option>
				</select></td>
			</tr>
			<tr >
				<!--bikin tombol daftar-->
				<td colspan="2" >
					<input class="btn btn-sm" type="submit" value="Tambah" name="daftar" /> 
					<input class="btn btn-sm" type="button" value="Gak Jadi" onclick="window.location.href='../view/dosen.php'" /></td>
				<!--bikin tombol kembali-->
				<td></td>
			</tr>
		</fieldset>
		</table>
	</form>
	</div>

	<!--============================================== Batas bawah ==============================-->

	<br>
<?php include("../view/view_footer.php");?>