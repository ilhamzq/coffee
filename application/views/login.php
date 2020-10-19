<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<head>
	<title>Login - Portal Informasi Kopi Indonesia</title>
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
	    <li class="active"><a class="active" href="<?php echo site_url('login') ?>">L o g i n</a></li>
	</ul>
  
	<div class="container-fluid fill login">
		<div class="row">
			<div class="col-sm-12 shadow">
				<form id="login" autocomplete="off">
					<div class="col-sm-12 field login">
						<input type="text" id="user" maxlength="160" placeholder="Email" required />
					</div>
					<div class="col-sm-12 field login">
						<input type="password" id="pass" maxlength="160" placeholder="Password" required />
					</div>
					<div class="col-sm-12 field login">
						<label class="note"><a href="<?php echo site_url('registrasi') ?>">Belum Punya Akun ?</a></label>
					</div>
					<div class="col-sm-12 field login">
						<button type="submit">Masuk</button>
					</div>
				</form>
			</div>
			<div class="col-sm-12 lblfooter-sm-all">
				<label>
					System Develop By Auto Virtual Media<br />Copyright &copy; 2019
				</label>
			</div>
		</div>
	</div>
	<div id="popup" class="col-sm-12 error"><label id="popuplbl"></label></div>

	<script>
	    $('#login').submit(function() {
	    	event.preventDefault();
               
			var user = $('#user').val();
			var pass = $('#pass').val();
               
			$.ajax({
				url: '<?php echo base_url() ?>login/in',
				type: 'post',
				dataType: 'json',
				data: { user: user, pass: pass },
				success: function(result) {                         
					popup(result);
				}
			});
		});
    	function popup(err) {
			var e = parseInt(err.split('#')[0]);               
			var msg = document.getElementById('popup');
			var lbl = document.getElementById('popuplbl');

			if (e>0) {
				msg.style.visibility = 'visible';
				msg.style.bottom = '1.5em';
				msg.style.transitionDuration = '0.5s';
				lbl.innerText = err.split('#')[1];                    
				setTimeout(function() {
					msg.style.visibility = 'hidden';
					msg.style.bottom = '0';					
					msg.style.transitionDuration = '0.1s';
					document.getElementById('user').focus();
				}, 2000);
			} else {
				window.location.href = '<?php echo base_url() ?>' + err.split('#')[1];
			}
		}
	</script>
</body>
</html>