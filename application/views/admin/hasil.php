<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<head>
	<title>Hasil - Portal Informasi Kopi Indonesia</title>
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
		<li class="active"><a class="active" href="<?php echo site_url('hasil') ?>">H a s i l</a></li>
		<li><a href="<?php echo site_url('petani') ?>?pg=1">P e t a n i</a></li>
		<li><a href="<?php echo site_url('kedai') ?>?pg=1">Pemilik Kedai</a></li>
		<li><a href="<?php echo site_url('pesanan') ?>">Pesanan</a></li>
		<li><a href="<?php echo site_url('login/out') ?>">L o g o u t</a></li>
	</ul>
  
	<div class="container-fluid fill list">
		<div class="row">
			<div class="col-sm-12 shadow">
				<h4>Hasil</h4>
				<?php
					$kota = array('', 'Malang', 'Sidoarjo', 'Tuban', 'Jember');
				?>
				<?php if ($this->input->get('p')==null) { ?>
				<table>
					<tr>
                         <th>Kota / Kabupaten</th>
                         <th class="flex">Jml Produksi Robusta (Ton)</th>
                         <th class="flex">Jml Produksi Arabika (Ton)</th>
                         <th class="flex">Jml Lahan Robusta (Ha)</th>
                         <th class="flex">Jml Lahan Arabika (Ha)</th>
                         <th>Aksi</th>
                    </tr>
                    <?php for ($y=1;$y<=4;$y++) { ?>
                         <tr>
                              <td><?php echo $kota[(int)$y] ?></td>
                              <td align="center" class="flex"><?php echo ((int)$y*500) ?></td>
                              <td align="center" class="flex"><?php echo ((int)$y*1000) ?></td>
                              <td align="center" class="flex"><?php echo ((int)$y*25) ?></td>
                              <td align="center" class="flex"><?php echo ((int)$y*50) ?></td>
                              <td align="center">
                                   <a href="" style="display: inline-block;"><i class="fas fa-eye"></i> Lihat</a>
                              </td>
                         </tr>
                    <?php } ?>
				</table>
				<?php } else { ?>
					<form id="jumlah" autocomplete="off">
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Kota / Kabupaten</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<label><?php echo $kota[(int)$_GET['keca']] ?></label>
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Jml Produksi Robusta (Ton)</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" id="prod1" value="" maxlength="3" />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Jml Produksi Arabika (Ton)</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" id="prod2" value="" maxlength="3" />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Jml Lahan Robusta (Ha)</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" id="laha1" value="" maxlength="3" />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Jml Lahan Arabika (Ha)</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" id="laha2" value="" maxlength="3" />
							</div>
						</div>						
						<div class="row col-sm-12 data">
							<div class="col-sm-2 field float-left">
								<label>&nbsp;</label>
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-2 field submit float-left">
								<button type="submit">Update</button>
							</div>
							<div class="col-sm-2 field submit float-left">
								<button type="reset" onClick="window.location.href='hasil';">Kembali</button>
							</div>
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
		$('#jumlah').submit(function() {
			event.preventDefault();
               
            var keca = $('#keca').val();
            var prod1 = $('#prod1').val();
            var prod2 = $('#prod2').val();
            var laha1 = $('#laha1').val();
            var laha2 = $('#laha2').val();            
		});		
	</script>
</body>
</html>