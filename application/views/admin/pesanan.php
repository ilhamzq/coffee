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
<style type="text/css">
select {
	color: #000000 !important;
}
@media (max-width: 768px) {
	.validadm {
		width: 33.33%;
		padding: 0em;
	}
	.validadm button {
		width: 90%;
		margin-left: 5% !important;
		margin: 0;
	}
}
@media (min-width: 1200px) {
	.validadm {
		padding: 0 0.5em;
	}
}
</style>
</head>
<body>
	<div class="container-fluid header">
		<div class="row">
			<div class="col-sm-1">
				<a href="admin">
					<img src="asset/image/logo.png" class="logo">
				</a>
			</div>
			<div class="col-sm-11">
				<label><?php echo $this->session->user ?></label>
				<img onclick="showmenu()" src="asset/image/admin.jpg" class="admin">
			</div>			
		</div>
	</div>

	<div id="menu-wall" onclick="hidemenu()" class="menu-wall"></div>
	<ul id="menu" class="menu">
		<li class="img"><img src="asset/image/admin.jpg" class="ul"> <?php echo $this->session->user ?></li>
		<li><a href="<?php echo site_url('hasil') ?>">H a s i l</a></li>
		<li><a href="<?php echo site_url('petani') ?>?pg=1">P e t a n i</a></li>
		<li><a href="<?php echo site_url('kedai') ?>?pg=1">Pemilik Kedai</a></li>
		<li class="active"><a class="active" href="<?php echo site_url('pesanan') ?>">Pesanan</a></li>
		<li><a href="<?php echo site_url('login/out') ?>">L o g o u t</a></li>
	</ul>
  
	<div class="container-fluid fill list">
		<div class="row">
			<div class="col-sm-12 shadow">
				<h4 style="padding-bottom: 0 !important;">Bukti Pembayaran</h4>
				<div class="col-sm-12" style="padding: 0 2%;">
					<hr>
				</div>
				<div class="row" style="padding: 0 3%; padding-bottom: 1em;">
					<div class="col-sm-12" style="padding: 1em 0.5em; border: 1px #ddd solid; border-radius: 5px;">
						<div class="col-sm-12">
							<div class="col-sm-8 float-left">
								<table class="pesananadm">
									<tr>
										<td style="width: 27%;">Tanggal Jam</td>
										<td style="width: 3%;">:</td>
										<td style="width: 70%;"><?php echo date('d-m-Y h:i') ?></td>
									</tr>
									<tr>
										<td>Pemilik Kedai</td>
										<td>:</td>
										<td>Ilhamz Q</td>
									</tr>
									<tr>
										<td>Petani</td>
										<td>:</td>
										<td>Said Zainul</td>
									</tr>
									<tr>
										<td>Produk</td>
										<td>:</td>
										<td>Arabika 1000 Mg</td>
									</tr>
									<tr>
										<td>Jenis</td>
										<td>:</td>
										<td>Arabika</td>
									</tr>
									<tr>
										<td>Harga</td>
										<td>:</td>
										<td>100,000 / 1 Kg</td>
									</tr>
									<tr>
										<td>Qty</td>
										<td>:</td>
										<td>10 Kg</td>
									</tr>
									<tr>
										<td>Total</td>
										<td>:</td>
										<td>1,000,000</td>
									</tr>
								</table>
							</div>							
							<div class="col-sm-4 float-right">
								<div class="col-sm-4 float-left validadm">
									<button onClick="window.open('<?php echo site_url('pesanan/bayarcek') ?>?id=1');" type="reset">Lihat</button>
								</div>
								<div class="col-sm-4 float-left validadm">
									<button type="reset">Konfirmasi</button>
								</div>
								<div class="col-sm-4 float-left validadm">
									<button type="reset">Batalkan</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br />
				<h4 style="padding-bottom: 0 !important;">Resi Kiriman</h4>
				<div class="col-sm-12" style="padding: 0 2%;">
					<hr>
				</div>
				<div class="row" style="padding: 0 3%; padding-bottom: 1em;">
					<div class="col-sm-12" style="padding: 1em 0.5em; border: 1px #ddd solid; border-radius: 5px;">
						<div class="col-sm-12">
							<div class="col-sm-8 float-left">
								<table class="pesananadm">
									<tr>
										<td>No Resi</td>
										<td>:</td>
										<td>1234567890</td>
									</tr>
									<tr>
										<td style="width: 27%;">Tanggal Jam</td>
										<td style="width: 3%;">:</td>
										<td style="width: 70%;"><?php echo date('d-m-Y h:i') ?></td>
									</tr>
									<tr>
										<td>Petani</td>
										<td>:</td>
										<td>Said Zainul</td>
									</tr>
									<tr>
										<td>Pemilik Kedai</td>
										<td>:</td>
										<td>Ilhamz Q</td>
									</tr>
									<tr>
										<td>Produk</td>
										<td>:</td>
										<td>Arabika 1000 Mg</td>
									</tr>
									<tr>
										<td>Jenis</td>
										<td>:</td>
										<td>Arabika</td>
									</tr>
									<tr>
										<td>Qty</td>
										<td>:</td>
										<td>10 Kg</td>
									</tr>
								</table>
							</div>
							<div class="col-sm-4 float-right">
								<div class="col-sm-4 float-left validadm">
									<button onClick="window.open('https://www.jne.co.id/id/tracking/trace');" type="submit">JNE Track</button>
								</div>
								<div class="col-sm-4 float-left validadm">
									<button type="reset">Konfirmasi</button>
								</div>
								<div class="col-sm-4 float-left validadm">
									<button type="reset">Batalkan</button>
								</div>
							</div>
						</div>
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
	    $('#prod1').on('keyup', function (event) {    
     		var charCode = event.keyCode;
     		if ((charCode<48 || charCode>57) && charCode!=8 && charCode!=229) {
     			$('#prod1').val('');
     		}
     	})
		$('#prod1').on('textInput', e => {
			var charCode = e.originalEvent.data.charCodeAt(0);
			if (charCode<48 || charCode>57) {
     			return false;
     		}
     	})
		
		$('#prod2').on('keyup', function (event) {    
     		var charCode = event.keyCode;
     		if ((charCode<48 || charCode>57) && charCode!=8 && charCode!=229) {
     			$('#prod2').val('');
     		}
     	})
		$('#prod2').on('textInput', e => {
			var charCode = e.originalEvent.data.charCodeAt(0);
			if (charCode<48 || charCode>57) {
     			return false;
     		}
     	})
		
		$('#laha1').on('keyup', function (event) {    
     		var charCode = event.keyCode;
     		if ((charCode<48 || charCode>57) && charCode!=8 && charCode!=229) {
     			$('#laha1').val('');
     		}
     	})
		$('#laha1').on('textInput', e => {
			var charCode = e.originalEvent.data.charCodeAt(0);
			if (charCode<48 || charCode>57) {
     			return false;
     		}
     	})
		
		$('#laha2').on('keyup', function (event) {    
     		var charCode = event.keyCode;
     		if ((charCode<48 || charCode>57) && charCode!=8 && charCode!=229) {
     			$('#laha2').val('');
     		}
     	})
		$('#laha2').on('textInput', e => {
			var charCode = e.originalEvent.data.charCodeAt(0);
			if (charCode<48 || charCode>57) {
     			return false;
     		}
     	})		
	</script>
</body>
</html>