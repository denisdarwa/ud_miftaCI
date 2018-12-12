
	<h1>Toko Kelontong Subagyo <br/> Yogyakarta</h1>

	<!-- <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?> -->
	<!-- <title>UD MIFTA</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/login.css"> -->
	
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="<?= base_url()?>welcome/dashboard" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			<!-- <?php
		     if(isset($pesan)){
			 echo $pesan;
		     }
			?> -->
			<p style="color: red"><?php echo $this->session->flashdata('message');?></p>
 
			<input type="submit" class="tombol_login" name="login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		
	</div>
	<!-- <script src="<?=base_url()?>/js/jquery-3.2.1.min.js"/> -->
 
 