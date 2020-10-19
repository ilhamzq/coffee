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
		<li><a href="<?php echo site_url('pesanan') ?>">P e s a n a n</a></li>		
		<li class="<?php if (isset($_GET['p'])) { echo 'active'; } ?>"><a class="<?php if (isset($_GET['p'])) { echo 'active'; } ?>" href="?p=profil">P r o f i l</a></li>
		<li><a href="<?php echo site_url('login/out') ?>">L o g o u t</a></li>
	</ul>
  
	<div class="container-fluid fill list">
		<div class="row">
			<div class="col-sm-12 shadow">
				<?php if (!isset($_GET['p'])) { echo '<h4>Informasi Kelompok Tani</h4>'; } else { echo '<h4>Profil</h4>'; } ?>
				
				<?php
					$nama = array('', 'Ilhamz Q', 'Andra F', 'Said Zainul', 'Tyo Yuniar', 'Zaini Anwar');
					$kota = array('', 'Malang', 'Malang', 'Sidoarjo', 'Tuban', 'Jember');					
				?>
				<?php if (!isset($_GET['p'])) { ?>
				<table>
					<tr>
                         <th>Nama Lengkap</th>
                         <th class="flex">Kota / Kabupaten</th>
                         <th>Telepon</th>
                    </tr>
                    <?php for ($y=1;$y<=5;$y++) { ?>
                    <tr>
                    	<td><?php echo $nama[(int)$y] ?></td>
                    	<td align="center" class="flex"><?php echo $kota[(int)$y] ?></td>
                    	<td align="center" class="flex">0812345678<?php echo $y ?></td>
                    </tr>
                    <?php } ?>
				</table>
				<?php } else { ?>
					<?php if ($this->input->get('p')=='profil') { ?>
					<form id="profil" autocomplete="off">
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Nama Lengkap</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" id="nama" value="Ilhamz Q" disabled />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Alamat</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" id="alam" value="" disabled />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Kota / Kabupaten</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" id="kota" value="Malang" disabled />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Kecamatan</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" id="keca" value="" disabled />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Kode Pos</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" id="kode" value="" disabled />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Telepon</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" id="tele" value="08123456783" disabled />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Email</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<label></label>
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Username</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<label>xyz</label>
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Password</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="password" id="pass" disabled class="contents" />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Re - Password</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="password" id="repa" disabled class="contents" />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-7 field error">
								<label id="popuplbl">&nbsp;</label>
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-2 field submit float-left">
								<button type="submit">Simpan</button>
							</div>
							<div class="col-sm-2 field submit float-left">
								<button type="reset" onClick="window.location.href='kedai';">Batal</button>
							</div>
						</div>
					</form>
					<?php } ?>
				<?php } ?>
			</div>
			<div class="col-sm-12 lblfooter-sm-all">
				<label>
					System Develop By Auto Virtual Media<br />Copyright &copy; 2019
				</label>
			</div>
		</div>
	</div>	

	<script>
	    $('#kode').on('keyup', function (event) {    
     		var charCode = event.keyCode;
     		if ((charCode<48 || charCode>57) && charCode!=8 && charCode!=229) {
     			$('#kode').val('');
     		}
     	})
		$('#kode').on('textInput', e => {
			var charCode = e.originalEvent.data.charCodeAt(0);
			if (charCode<48 || charCode>57) {
     			return false;
     		}
     	})
		
		$('#tele').on('keyup', function (event) {    
     		var charCode = event.keyCode;
     		if ((charCode<48 || charCode>57) && charCode!=8 && charCode!=229) {
     			$('#tele').val('');
     		}
     	})
		$('#tele').on('textInput', e => {
			var charCode = e.originalEvent.data.charCodeAt(0);
			if (charCode<48 || charCode>57) {
     			return false;
     		}
     	})
		
		$('#profil').submit(function() {
			event.preventDefault();
               
            window.location.href = '<?php echo base_url() ?>/kedai';			
		});
          
	</script>
</body>
</html>