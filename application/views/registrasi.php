<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<head>
	<title>Registrasi - Portal Informasi Kopi Indonesia</title>
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
				<a href="./">
					<img src="asset/image/logo.png" class="logo">
				</a>
			</div>
			<div class="col-sm-11">
				<i onclick="showmenu()" class="fas fa-list imenu"></i>
			</div>			
		</div>
	</div>

	<div id="menu-wall" onclick="hidemenu()" class="menu-wall"></div>
	<ul id="menu" class="menu">
		<li><a href="./">Informasi Produksi</a></li>
	    <li><a href="./">T e n t a n g</a></li>
	    <li><a href="<?php echo site_url('login') ?>">L o g i n</a></li>
	</ul>
  
	<div class="container-fluid fill list">
		<div class="row">
			<div class="col-sm-12 shadow">
				<?php if (!isset($_GET['p'])) { ?>
				<?php
          			$prop = array('', 'Aceh', 'Sumut', 'Sumbar', 'Riau', 'Jambi', 'Kep. Riau', 'Kep. Bangka', 'Sumsel', 'Bengkulu', 'Lampung', 'Banten', 'DKI Jakarta', 'Jabar', 'Jateng', 'DI Yogyakarta', 'Jatim', 'Bali', 'NTB', 'NTT', 'Kalut', 'Kaltim', 'Kalsel', 'Kalbar', 'Kalteng', 'Gorontalo', 'Sulut', 'Sulteng', 'Sulbar', 'Sulsel', 'Sultra', 'Maluku', 'Maluku Utara', 'Papua Barat', 'Papua');
          		?>
				<form id="daftar" autocomplete="off">
					<div class="col-sm-6 field">
						<h2>Registrasi</h1>
					</div>
					<div class="col-sm-12 field">
						<input type="text" id="nama" placeholder="Nama Lengkap" maxlength="40" required />
					</div>
					<div class="col-sm-12 field">
						<input type="text" id="alam" placeholder="Alamat" maxlength="160" required />
					</div>
					<div class="col-sm-12 field">
						<select id="prop" required>
							<option value="" disabled selected>Propinsi</option>
							<?php for ($r=1; $r<=34; $r++) { ?>
								<option value="<?php echo $r ?>"><?php echo $prop[$r] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-sm-12 field">
						<select id="kota" required>
							<option value="" disabled selected>Kota / Kabupaten</option>							
						</select>
					</div>
					<div class="col-sm-12 field">
						<select id="keca" required>
							<option value="" disabled selected>Kecamatan</option>							
						</select>
					</div>
					<div class="col-sm-12 field">
						<select id="keca" required>
							<option value="" disabled selected>Kode Pos</option>							
						</select>
					</div>
					<div class="col-sm-12 field">
						<input type="text" id="tele" placeholder="Telepon" maxlength="13" required />
					</div>
					<div class="col-sm-12 field">
						<label style="color: #777777;">Status</label>
					</div>
					<div class="col-sm-5 field option">
						<div class="col-sm-6 float-left">
							<input type="radio" id="peke1" name="peke" required />
							<label>Petani</label>
						</div>
						<div class="col-sm-6 float-left">
							<input type="radio" id="peke2" name="peke" required />
							<label>Pemilik Kedai</label>
						</div>
					</div>
					<div class="col-sm-12 field">
						<input type="text" id="emai" placeholder="Email" maxlength="160" required />
					</div>
					<div class="col-sm-12 field">
						<input type="text" id="user" placeholder="Username" maxlength="160" required />
					</div>
					<div class="col-sm-12 field">
						<input type="password" id="pass" placeholder="Password" maxlength="160" required />
					</div>
					<div class="col-sm-12 field">
						<input type="password" id="repa" placeholder="Re - Password" maxlength="160" required />
					</div>
					<div class="col-sm-12 field">
						<label id="popuplbl" class="error">&nbsp;</label>
					</div>
					<div class="col-sm-2 field">
						<button type="submit" style="width: 80%; margin-left: 0;">Daftar</button>
					</div>
				</form>
				<?php } else { ?>
				<form method="post" action="./">
					<div class="col-sm-12 field">
						<h2>Registrasi</h1>
					</div>
					<div class="col-sm-12 field">
						<h5>Terima kasih, pendaftaran anggota baru berhasil.</h5>
					</div>
					<div class="col-sm-6 field">
						<label>&nbsp;</label>
					</div>
					<div class="col-sm-2 field">
						<button type="submit">OK</button>
					</div>
				</form>
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
		
		$('#daftar').submit(function() {
			event.preventDefault();
               
            var nama = $('#nama').val();
            var alam = $('#alam').val();
            var kota = $('#kota').val();
            var keca = $('#keca').val();
            var kode = $('#kode').val();
            var tele = $('#tele').val();               
            var peke = '';
            if ($('#peke1').is(':checked')) { peke = '1'; }
            if ($('#peke2').is(':checked')) { peke = '2'; }
            var emai = $('#emai').val();
            var user = $('#user').val();
            var pass = $('#pass').val();
            var repa = $('#repa').val();
               
            if (emai.includes('@')==true) {
				var at = emai.split('@').length-1;
                if (at>1) {
					popup('3#Masukkan Email Yg Valid');                    
					return false;
                }
            }
            else {
				popup('3#Masukkan Email Yg Valid');
				return false;
            }            
            if (pass != repa) {
				popup('5#Masukkan Password Yg Sama');
				return false;
            }
               
			window.location.href = '<?php echo base_url() ?>/registrasi?p=success';
		});          
	</script>
</body>
</html>