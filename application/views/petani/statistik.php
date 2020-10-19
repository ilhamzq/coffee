<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<head>
	<title>Statistik - Portal Informasi Kopi Indonesia</title>
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
    <script src="asset/js/Chart.min.js"></script>    
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
		<li><a href="<?php echo site_url('produk') ?>">P r o d u k</a></li>
		<li><a href="<?php echo site_url('pesanan') ?>">P e s a n a n</a></li>
		<li class="active"><a class="active" href="<?php echo site_url('statistik') ?>">S t a t i s t i k</a></li>
		<li><a href="<?php echo site_url('petani?p=profil') ?>">P r o f i l</a></li>
		<li><a href="<?php echo site_url('login/out') ?>">L o g o u t</a></li>
	</ul>

	<style type="text/css">
		.col-sm-6.product {
			height: 300px;
			text-align: center;
		}
		.canvas {
			height: 100%;
			width: 100%
			border: 1px red solid;
		}
		.notecnvs {
			height: 30%;
			width: 100%
			font-size: 5px !important;
			display: inline-block;
		}
	</style>

	<div class="container-fluid fill list">
		<div class="row">
			<div class="col-sm-12 shadow">
				<h4 class="produk">S t a t i s t i k</h4>				
				<div class="col-sm-12 field product">
					<div class="col-sm-6 product">
						<canvas id="chrt1" class="canvas"></canvas>
						<label class="notecnvs">Info Hrg Jual Time Series<br>1 Month (Rata-Rata)</label>
					</div>
					<div class="col-sm-6 product">
						<canvas id="chrt2" class="canvas"></canvas>
						<label class="notecnvs">Info Hrg Jual Time Series<br>2 Month (Rata-Rata)</label>
					</div>
					<div class="col-sm-6 product">
						<canvas id="chrt3" class="canvas"></canvas>
						<label class="notecnvs">Info Hrg Jual Time Series<br>3 Month (Rata-Rata)</label>
					</div>
					<div class="col-sm-6 product">
						<canvas id="chrt4" class="canvas"></canvas>
						<label class="notecnvs">Info Hrg Jual Time Series<br>4 Month (Rata-Rata)</label>
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
        var data1 = {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"],
            datasets: [{
                borderColor: '#57341E',
                backgroundColor: '#ffffff',
                data: [63140, 63700, 63840, 62020, 60060, 59220, 62860, 64680, 60760, 61600, 60340, 66220],
                borderWidth: 2,
                pointRadius: 1
            }]
        };
        var data2 = {
            labels: ["Feb", "Apr", "Jun", "Aug", "Oct", "Des"],
            datasets: [{
                borderColor: '#57341E',
                backgroundColor: '#ffffff',
                data: [63700, 62020, 59220, 64680, 61600, 66220],
                borderWidth: 2,
                pointRadius: 1
            }]
        };
        var data3 = {
            labels: ["Mar", "Jun", "Sep", "Des"],
            datasets: [{
                borderColor: '#57341E',
                backgroundColor: '#ffffff',
                data: [63840, 59220, 60760, 66220],
                borderWidth: 2,
                pointRadius: 1
            }]
        };
        var data4 = {
            labels: ["Apr", "Aug", "Des"],
            datasets: [{
                borderColor: '#57341E',
                backgroundColor: '#ffffff',
                data: [62020, 64680, 66220],
                borderWidth: 2,
                pointRadius: 1
            }]
        };
        
        var option = {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        fontColor: '#676767',
                        fontSize: 8
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        fontColor: '#676767',
                        fontSize: 8
                    }
                }]
            }
        };

        Chart.Line('chrt1', {
            data: data1,
            options: option
        });
        Chart.Line('chrt2', {
            data: data2,
            options: option
        });
        Chart.Line('chrt3', {
            data: data3,
            options: option
        });
        Chart.Line('chrt4', {
            data: data4,
            options: option
        });

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