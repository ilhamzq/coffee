<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<head>
	<title>Pesanan - Portal Informasi Kopi Indonesia</title>
    <meta charset="utf-8">
	<meta name="theme-color" content="#000000">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="asset/image/beans.ico">    
    <link rel="stylesheet" href="asset/css/bootstrap.css">
	<link rel="stylesheet" href="asset/css/device.css">
	<link rel="stylesheet" href="asset/css/style.css">
	<link rel="stylesheet" href="asset/font/css/brands.min.css">
	<link rel="stylesheet" href="asset/font/css/fontawesome.min.css">
	<link rel="stylesheet" href="asset/font/css/solid.min.css">
	<script src="asset/js/menu.js"></script>
	<script src="asset/js/bootstrap.js"></script>
	<script src="asset/js/jquery-3.4.1.min.js"></script>
</head>
<body>
	<div class="container-fluid header">
		<div class="row">
			<div class="col-sm-1">
				<a href="kedai">
					<img src="asset/image/logo.png" class="logo">
				</a>
			</div>
			<div class="col-sm-11">
				<label><?php echo $this->session->nama ?></label>
				<img onclick="showmenu()" src="asset/image/admin.jpg" class="admin">
			</div>			
		</div>
	</div>

	<div id="menu-wall" onclick="hidemenu()" class="menu-wall"></div>
	<ul id="menu" class="menu">
		<li class="img"><img src="asset/image/admin.jpg" class="ul"> <?php echo $this->session->nama ?></li>
		<li><a href="<?php echo site_url('produk') ?>">P r o d u k</a></li>
		<li class="active"><a class="active" href="<?php echo site_url('pesanan') ?>">P e s a n a n</a></li>		
		<li><a href="<?php echo site_url('kedai?p=profil') ?>">P r o f i l</a></li>
		<li><a href="<?php echo site_url('login/out') ?>">L o g o u t</a></li>
	</ul>

	<div class="container-fluid fill list">
		<div class="row">
			<div class="col-sm-12 shadow">
				<h4 class="produk">P e s a n a n</h4>				
				<?php $kota = array('', 'Malang', 'Kab. Malang', 'Batu'); $jenis = array('', 'Arabika', 'Robusta'); ?>
<style type="text/css">

.col-sm-12.pesan .col-sm-3 button.btnordprokedai {
	width: 100%;
	margin-left: 0;
}
	
@media (max-width: 576px) {
	.col-sm-12.pesan {
		max-width: 95%;
		margin-top: 1em;
		margin-bottom: 5em;
		margin-left: 2.5%;
		height: auto;
	}
	.col-sm-12.pesan .col-sm-2 {
		width: 40%;
	}
	.col-sm-12.pesan .col-sm-2 img {
		width: 100%;
	}
	.col-sm-12.pesan .col-sm-3 {
		width: 100%;
		padding-top: 1em;
	}
	.col-sm-12.pesan .col-sm-3 label {
		margin: 0;
		margin-bottom: 3em;
		margin-left: 40%;
		width: 60%;
		padding-left: 1em;
	}
	.col-sm-12.pesan .col-sm-3 input {
		margin-bottom: 1em;
		text-align: center;
		width: 100%;
		margin-left: 0;
	}
	.col-sm-12.pesan .col-sm-3 button.btnordprokedai {
		margin-bottom: 1em;
	}
	.col-sm-12.pesan .col-sm-7 {
		width: 60%;
		padding-left: 1em;
	}
	.col-sm-12.pesan .col-sm-7 label {
		margin: 0;
		float: left;
		height: 1.5em;
		padding: 0;
	}
	.col-sm-12.pesan .col-sm-7 label.col-sm-12.name {
		font-weight: bold;
		height: 3em;
	}
	.col-sm-12.pesan .col-sm-7 label.col-sm-1 {
		width: 10%;
	}
	.col-sm-12.pesan .col-sm-7 label.col-sm-2 {
		width: 30%;
	}
	.col-sm-12.pesan .col-sm-7 label.col-sm-6 {
		width: 60%;
	}
	.col-sm-12.pesan .col-sm-7 label.col-sm-9 {
		width: 100%;
	}
	.col-sm-12.pesan .col-sm-7 label.col-sm-9.sts.kedai {
		height: 3em;
		color: #999999;
		font-style: italic;
		font-size: 0.8em;
		padding-top: 1em;
	}
}
@media (min-width: 1200px) {
	.col-sm-12.pesan {
		max-width: 96%;
		margin-left: 2%;
		margin-bottom: 1.5em;
		height: 11.5em;
		padding: 0;
	}
	.col-sm-12.pesan .col-sm-2 {
		height: 100%;
		width: 100%;
	}
	.col-sm-12.pesan .col-sm-2 img {
		width: 100%;
	}
	.col-sm-12.pesan .col-sm-3 {
		height: 100%;
		width: 100%;
		padding-top: 2em;
	}
	.col-sm-12.pesan .col-sm-3 label {
		margin: 0;
		margin-bottom: 3em;
		width: 100%;
		margin-left: 0;
		padding-left: 0;
		padding-right: 0;
		text-align: center;
	}
	.col-sm-12.pesan .col-sm-3 input {
		margin-bottom: 1em;
		text-align: center;
		width: 100%;
		margin-left: 0;
	}
	.col-sm-12.pesan .col-sm-3 button.btnordprokedai {
		margin-bottom: 1em;
		float: left;
		width: 48% !important;
	}
	.col-sm-12.pesan .col-sm-3 button.btnordprokedai.full {
		width: 80% !important;
		margin-left: 10% !important;
		float: none;
	}
	.col-sm-12.pesan .col-sm-3 button.btnordprokedai.right {
		float: right;
	}
	.col-sm-12.pesan .col-sm-7 {
		padding-left: 2em;
	}
	.col-sm-12.pesan .col-sm-7 label {
		margin: 0;
		float: left;
		height: 1.5em;
		padding: 0;
	}
	.col-sm-12.pesan .col-sm-7 label.col-sm-12.name {
		font-weight: bold;
		height: 2em;
	}
	.col-sm-12.pesan .col-sm-7 label.col-sm-1 {
		max-width: 5%;
	}
	.col-sm-12.pesan .col-sm-7 label.col-sm-2 {
		min-width: 20%;
	}
	.col-sm-12.pesan .col-sm-7 label.col-sm-6 {
		min-width: 75%;
	}
	.col-sm-12.pesan .col-sm-7 label.col-sm-9 {
		min-width: 75%;
	}
	.col-sm-12.pesan .col-sm-7 label.col-sm-9.sts {
		height: 4em;
		color: #999999;
		font-style: italic;
		font-size: 0.8em;
		padding-top: 1em;
		min-width: 100%;
	}
}
</style>
				<div class="col-sm-12 pesan">
					<div class="col-sm-2 float-left">
						<img src="asset/image/bg_1.jpg">
					</div>					
					<div class="col-sm-7 float-left">
						<label class="col-sm-12 name">Arabika 1000 Mg</label>
						<label class="col-sm-2">Jenis</label>
						<label class="col-sm-1">:</label>
						<label class="col-sm-6">Arabika</label>						
						<label class="col-sm-2">Harga</label>
						<label class="col-sm-1">:</label>
						<label class="col-sm-9">100,000 / 1 Kg</label>					
						<label class="col-sm-2">Qty</label>
						<label class="col-sm-1">:</label>
						<label class="col-sm-6">10</label>					
						<label class="col-sm-2">Total</label>
						<label class="col-sm-1">:</label>
						<label class="col-sm-6">1,000,000</label>
						<label class="col-sm-9 sts kedai">
							Menunggu Pembayaran
						</label>						
					</div>
					<div class="col-sm-3 float-left">
						<form>
							<input type="text" id="nore1" name="nore1" onkeyup="tnore(1)" maxlength="20" placeholder="Atas Nama" />
							<input type="file" onChange="cekfoto(1)" id="foto1" name="foto1" accept="image/*" style="text-align: left;" />
							<button type="submit" class="btnordprokedai">Konfirmasi</button>
							<button type="reset" class="btnordprokedai right">Batalkan</button>
						</form>						
					</div>					
				</div>
			</div>
			<div class="col-sm-12 lblfooter-sm-all">
				<label>
					System Develop By Auto Virtual Media<br />Copyright &copy; 2019
				</label>
			</div>
		</div>
	</div>	

	<script>
	    function cekfoto(e) {
        	var type = document.getElementById('foto'+e).value;
			var dot = ['.bmp', '.jpg', '.jpeg', '.png'];
        	
        	if (dot.includes(type.substring(type.lastIndexOf('.'))) == false) {
				document.getElementById('foto'+e).value = '';
			}
        }
	</script>
</body>
</html>