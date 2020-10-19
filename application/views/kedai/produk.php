<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<head>
	<title>Produk - Portal Informasi Kopi Indonesia</title>
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
		<li class="active"><a class="active" href="<?php echo site_url('produk') ?>">P r o d u k</a></li>
		<li><a href="<?php echo site_url('pesanan') ?>">P e s a n a n</a></li>		
		<li><a href="<?php echo site_url('kedai?p=profil') ?>">P r o f i l</a></li>
		<li><a href="<?php echo site_url('login/out') ?>">L o g o u t</a></li>
	</ul>

	<div class="container-fluid fill list">
		<div class="row">
			<div class="col-sm-12 shadow">
				<h4 class="produk">P r o d u k</h4>				
				<?php $jenis = array('', 'Arabika', 'Robusta'); ?>

<style type="text/css">

.col-sm-4.kedai .col-sm-6 img {
	width: 95%;
}
.col-sm-4.kedai .col-sm-6 label {
	padding: 0.5em 0;
}
.col-sm-4.kedai .col-sm-6 label.name {
	font-weight: bold;
	height: 3em;
}


.col-sm-4.kedai .col-sm-6 .col-sm-5 input {
	text-align: center;
	padding: 0.5em 0;
	margin-top: 1.5em;
}
.col-sm-4.kedai .col-sm-6 .col-sm-6 button {
	width: 100%;
	margin: 0;
	padding: 0.5em 0;
	margin-top: 1.5em;
}


@media (max-width: 576px) {
	.col-sm-4.kedai {
		padding: 0;
		padding-left: 0.5em;
		margin-bottom: 3em;
	}
	.col-sm-4.kedai .col-sm-6.image {
		width: 40%;
	}
	.col-sm-4.kedai .col-sm-6.image img {
		width: 100%;
	}
	.col-sm-4.kedai .col-sm-6.label {
		width: 60%;
		padding-left: 1em;
	}
	.col-sm-4.kedai .col-sm-6.label label {
		padding: 0;
	}
	.col-sm-4.kedai .col-sm-6.label .col-sm-5 {
		width: 35%;
	}
	.col-sm-4.kedai .col-sm-6.label .col-sm-1 {
		width: 5%;
	}
	.col-sm-4.kedai .col-sm-6.label .col-sm-6 {
		width: 60%;
	}
}
@media (min-width: 1200px) {
	.col-sm-4.kedai {
		padding: 1.5em 0;
		padding-bottom: 0.5em;
		padding-left: 0.5em;
	}
	.col-sm-4.kedai .col-sm-6.image {
		width: 40%;
	}
	.col-sm-4.kedai .col-sm-6.image img {		
		min-height: 100%;
	}
	.col-sm-4.kedai .col-sm-6.label {
		min-width: 60%;
		padding: 0 1em;
	}
	.col-sm-4.kedai .col-sm-6.label label {
		padding: 0;
	}
	.col-sm-4.kedai .col-sm-6.label .col-sm-5 {
		width: 35%;
	}
	.col-sm-4.kedai .col-sm-6.label .col-sm-1 {
		width: 5%;
	}
	.col-sm-4.kedai .col-sm-6.label .col-sm-6 {
		min-width: 60%;
	}
}

</style>

				<div class="col-sm-12 field product">
					<div class="col-sm-4 kedai float-left">
						<div class="col-sm-6 image float-left">
							<img style="float: left;" src="asset/image/bg_1.jpg">
						</div>
						<form>
							<div class="col-sm-6 label float-left">
								<label class="col-sm-12 name">Robusta 1000 Mg</label>
								<label class="col-sm-12">Robusta</label>
								<label class="col-sm-12">75,000 / 1 Kg</label>							
								<div class="col-sm-5 float-left">
									<input type="text" id="juml1" name="juml1" onkeyup="tjuml(1)" maxlength="3" placeholder="Qty" />
								</div>
								<div class="col-sm-1 float-left">&nbsp;</div>
								<div class="col-sm-6 float-left">
									<button type="submit">Beli</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-sm-4 kedai float-left">
						<div class="col-sm-6 image float-left">
							<img style="float: left;" src="asset/image/bg_1.jpg">
						</div>
						<form>
							<div class="col-sm-6 label float-left">
								<label class="col-sm-12 name">Arabika 1000 Mg</label>
								<label class="col-sm-12">Arabika</label>
								<label class="col-sm-12">100,000 / 1 Kg</label>							
								<div class="col-sm-5 float-left">
									<input type="text" id="juml2" name="juml2" onkeyup="tjuml(2)" maxlength="3" placeholder="Qty" />
								</div>
								<div class="col-sm-1 float-left">&nbsp;</div>
								<div class="col-sm-6 float-left">
									<button type="submit">Beli</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-sm-4 kedai float-left">
						<div class="col-sm-6 image float-left">
							<img style="float: left;" src="asset/image/bg_1.jpg">
						</div>
						<form>
							<div class="col-sm-6 label float-left">
								<label class="col-sm-12 name">Arabika 1500 Mg</label>
								<label class="col-sm-12">Arabika</label>
								<label class="col-sm-12">150,000 / 1 Kg</label>							
								<div class="col-sm-5 float-left">
									<input type="text" id="juml3" name="juml3" onkeyup="tjuml(3)" maxlength="3" placeholder="Qty" />
								</div>
								<div class="col-sm-1 float-left">&nbsp;</div>
								<div class="col-sm-6 float-left">
									<button type="submit">Beli</button>
								</div>
							</div>
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
	    function tjuml(e) {
	    	var n = document.getElementById('juml'+e).value;

	    	if (n.length>0 && ((n.charCodeAt(n.length-1)<48 || n.charCodeAt(n.length-1)>57) && n.charCodeAt(n.length-1)!=8)) {
				document.getElementById('juml'+e).value = '';
			}
			if (n.length>1 && +document.getElementById('juml'+e).value==0) {
				document.getElementById('juml'+e).value = '';
			}
			if (n.length<2 && +document.getElementById('juml'+e).value==0) {
				document.getElementById('juml'+e).value = '';
			}
        }
	</script>
</body>
</html>