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
				<a href="petani">
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
		<!--<li><a href="<?php echo site_url('petani?p=data') ?>">D a t a</a></li>-->
		<li class="active"><a class="active" href="<?php echo site_url('produk') ?>">P r o d u k</a></li>
		<li><a href="<?php echo site_url('pesanan') ?>">P e s a n a n</a></li>
		<li><a href="<?php echo site_url('statistik') ?>">S t a t i s t i k</a></li>
		<li><a href="<?php echo site_url('petani?p=profil') ?>">P r o f i l</a></li>
		<li><a href="<?php echo site_url('login/out') ?>">L o g o u t</a></li>
	</ul>

	<div class="container-fluid fill list">
		<div class="row">
			<div class="col-sm-12 shadow">
				<h4 class="produk">P r o d u k</h4>				
				<?php if ($this->input->get('p')==null) { ?>
				<div class="col-sm-12 field add_data">
					<button onClick="window.location.href='?p=tambah';" class="col-sm-1">Tambah</button>
				</div>
				<div class="col-sm-12 field product">
					<div class="col-sm-4 product">
						<img src="asset/image/bg_1.jpg">
						<p>
							<label class="name">Robusta 1000 Mg</label>
							<label>Robusta</label>
							<label>75,000 / 1 Kg</label>
							<button>Ubah</button>
							<button>Hapus</button>
						</p>
					</div>
					<div class="col-sm-4 product">
						<img src="asset/image/bg_1.jpg">
						<p>
							<label class="name">Arabika 1000 Mg</label>
							<label>Arabika</label>
							<label>100,000 / 1 Kg</label>
							<button>Ubah</button>
							<button>Hapus</button>
						</p>
					</div>
					<div class="col-sm-4 product">
						<img src="asset/image/bg_1.jpg">
						<p>
							<label class="name">Arabika 1500 Mg</label>
							<label>Arabika</label>
							<label>150,000 / 1 Kg</label>
							<button>Ubah</button>
							<button>Hapus</button>
						</p>
					</div>
				</div>
				<?php } else { ?>
					<form>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Nama</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" name="nama" maxlength="20" value="" required />
							</div>
						</div>						
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Jenis</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<select onChange="setjen()" id="jeni" name="jeni" style="color: #777777 !important" required>
								   <option value="" disabled selected></option>
								   <option value="">Arabika</option>
								   <option value="">Robusta</option>
								</select>
							</div>
						</div>						
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Harga</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" id="harg" name="harg" maxlength="6" value="" required />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Berat (Kg)</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<input type="text" id="bera" name="bera" maxlength="2" value="" required />
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-6 field float-left"><b>
								<label>Foto</label>
							</b></div>
							<div class="col-sm-1 field float-left">
								<label>:</label>
							</div>
							<div class="col-sm-8 field float-left">
								<style type="text/css">
									.foto {
										width: 200px;
										height: 200px;
										border: 0;
										padding: 0.5em;
										cursor: pointer;
									}
								</style>
								<img id="imgfoto" src="asset/image/cam.png" class="foto" title="Klik Upload">
								<input id="urlfoto" name="urlfoto" type="file" style="display: none;" accept="image/*">
							</div>
						</div>
						<style type="text/css">
							@media (max-width: 1366px) {
								.submitfoto {
									margin-top: 100px;
								}
							}
							@media (max-width: 576px) {
								.submitfoto {
									margin-top: 0px;
								}
							}
						</style>						
						<div class="row col-sm-12 data submitfoto">
							<div class="col-sm-7 field error">
								<label id="popuplbl">&nbsp;</label>
							</div>
						</div>
						<div class="row col-sm-12 data">
							<div class="col-sm-2 field submit float-left">
								<button type="submit">Simpan</button>
							</div>
							<div class="col-sm-2 field submit float-left">
								<button type="reset" onClick="window.location.href='produk';">Batal</button>
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
		$('#imgfoto').click(function() {
			$('#urlfoto').trigger('click');
		});
		$('#urlfoto').change(function() {
			var tmp = URL.createObjectURL(event.target.files[0]);
			$('#imgfoto').fadeIn('fast').attr('src', tmp);
		});		
		$('#harg').on('keyup', function (event) {    
     		var charCode = event.keyCode;
     		if ((charCode<48 || charCode>57) && charCode!=8 && charCode!=229) {
     			$('#harg').val('');
     		}
     	})
		$('#harg').on('textInput', e => {
			var charCode = e.originalEvent.data.charCodeAt(0);
			if (charCode<48 || charCode>57) {
     			return false;
     		}
     	})
		
		$('#bera').on('keyup', function (event) {    
     		var charCode = event.keyCode;
     		var vberat = $('#bera').val();
     		
     		if ((charCode<48 || charCode>57) && charCode!=8 && charCode!=190 && charCode!=229) {
     			$('#bera').val('');
     		} else {
     			if (isNaN(parseFloat(vberat))==true) {
     				$('#bera').val('');
     			} else {
     				if (charCode==190 && vberat.length>2) {
     					if (vberat.slice(vberat.length-1)=='.') {
     						$('#bera').val(vberat.substr(0,vberat.length-1));
     					}
     				}
     			}
     		}
     	})
		$('#bera').on('textInput', e => {
			var charCode = e.originalEvent.data.charCodeAt(0);
			var vberat = $('#bera').val();
     		
     		if ((charCode<48 || charCode>57) && charCode!=190) {     			
     			return false;
     		} else {
     			if (isNaN(parseFloat(vberat))==true) {
     				$('#bera').val('');
     			} else {
     				if (charCode==190 && vberat.length>2) {
     					if (vberat.slice(vberat.length-1)=='.') {
     						$('#bera').val(vberat.substr(0,vberat.length-1));
     					}     					
     				}
     			}
     		}
     	})
     	
     	function setjen() {
       		var jen = document.getElementById('jeni');
       		jen.style.setProperty('color', '#000000', 'important');                    
        }
	</script>
</body>
</html>