	<!-- cek apakah sudah login -->
	<?php 
	require_once("../auth.php"); 
	include ("../config/config.php");
	include ("../load_header_dosen.php");
	?>


	

	<div class="sidebar">
		<a class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
		<a href="dosen.php"><i class="fa fa-address-book-o"></i> Users</a>
	</div>

	<div class="content">
		<h4>Selamat datang, <span style="color: red;"> <?php echo $_SESSION['username']; ?>!</span> anda telah login.</h4>
		<br>
		<a href="logout.php">Log Out</a>
	</div>

</body>
</html>
