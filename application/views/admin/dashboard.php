<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<head>
	<title>Dashboard - Portal Informasi Kopi Indonesia</title>
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
@media (max-width: 576px) {
	h4 {
	     padding: 0.25em 0% !important;
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
		<li><a href="<?php echo site_url('pesanan') ?>">Pesanan</a></li>
		<li><a href="<?php echo site_url('login/out') ?>">L o g o u t</a></li>
	</ul>
  
	<div class="container-fluid fill list">
		<div class="row">
			<div class="col-sm-12 shadow">
				<h4>Registrasi</h4>
				
				<?php
					$nama = array('', 'Ilhamz Q', 'Andra F', 'Said Zainul', 'Tyo Yuniar', 'Zaini Anwar');
					$kota = array('', 'Malang', 'Malang', 'Sidoarjo', 'Tuban', 'Jember');
					$peke = array('', 'CEO', 'COO', 'CMO', 'CTO', 'Digital Content');
				?>
				<table>
					<tr>
                         <th>Nama Lengkap</th>
                         <th class="flex">Kota / Kabupaten</th>
                         <th class="flex">Pekerjaan</th>
                         <th>Aksi</th>
                    </tr>
                    <?php for ($y=1;$y<=5;$y++) { ?>
                         <tr>
                              <td><?php echo $nama[(int)$y] ?></td>
                              <td align="center" class="flex"><?php echo $kota[(int)$y] ?></td>
                              <td align="center" class="flex"><?php echo $peke[(int)$y] ?></td>
                              <td align="center">
                                   <a href="">Lihat</a>
                                   <a href="">Hapus</a>
                              </td>
                         </tr>
                    <?php } ?>
				</table>
				
			</div>
			<div class="col-sm-12 lblfooter-sm-all">
				<label>
					System Develop By Auto Virtual Media<br />Copyright &copy; 2019
				</label>
			</div>
		</div>
	</div>	
</body>
</html>