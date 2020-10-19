<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php
	if (isset($_POST['kec'])) {
		$kec = $_POST['kec'];				
		$sqlm = $this->db->get_where('maps', array('keca' => $kec));
		$rowm = $sqlm->row();
		
		$this->session->set_userdata('Lat', explode(',', $rowm->cord)[0]);
		$this->session->set_userdata('Lon', explode(',', $rowm->cord)[1]);
		$this->session->set_userdata('Mar', 'True');
	} else {
		$this->session->set_userdata('Lat', '-1.1746021');
		$this->session->set_userdata('Lon', '116.7717072');
		$this->session->set_userdata('Mar', 'False');
	}
?>

<!DOCTYPE html>
<head>
	<title>Selamat Datang - Portal Informasi Kopi Indonesia</title>
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
	<link rel="stylesheet" href="asset/css/ol.css">
	<script src="asset/js/menu.js"></script>
	<script src="asset/js/bootstrap.js"></script>
	<script src="asset/js/jquery-3.4.1.min.js"></script>
    <script src="asset/js/OpenLayers.js"></script>
	<script>
		var setLat = <?php echo $this->session->userdata('Lat'); ?>;
		var setLon = <?php echo $this->session->userdata('Lon'); ?>;		
		var setZoom = 5;
		var map;
		var projGoogle;
		var projWGS84;  
		var markersvector;
      
		function placeMark(lonlat) {
				var markersvectorlayer = map.getLayer('Markersvector');
 				markersvectorlayer.removeAllFeatures();					
				point = new OpenLayers.Geometry.Point(lonlat.lon, lonlat.lat);
				markersvectorlayer.addFeatures([
					new OpenLayers.Feature.Vector(
						point,
						{},
						{
							externalGraphic: 'asset/image/marker.png',
							graphicHeight: 30,
							graphicWidth: 30
						}
					)
				]);
		}
			
		function updateLocation(lonlat, zoom) {			
			lonlatWGS84 = lonlat.transform(projGoogle, projWGS84);					
			var lat = lonlatWGS84.lat;
			var lon = lonlatWGS84.lon;
			document.getElementById('cordLat').value = lat;
			document.getElementById('cordLon').value = lon;			
		}

		function init() {
			map = new OpenLayers.Map("map", {
				projection: new OpenLayers.Projection("EPSG:900913"),
				displayProjection: new OpenLayers.Projection("EPSG:4326")
			});
				
			projWGS84 = new OpenLayers.Projection("EPSG:4326");
			projGoogle = new OpenLayers.Projection("EPSG:900913");

			markersvector = new OpenLayers.Layer.Vector();   	
			markersvector.id = "Markersvector";
			map.addLayers([new OpenLayers.Layer.OSM(), markersvector]);

			var point = new OpenLayers.LonLat(setLon, setLat);
			map.setCenter(point.transform(projWGS84, map.getProjectionObject()), setZoom);
			updateLocation(map.getCenter(), map.getZoom());
			<?php if ($this->session->userdata('Mar')=='True') { ?>
				placeMark(map.getCenter());
			<?php } ?>
        }
	</script>
	<style type="text/css">
		.container-fluid.fillmap .row .col-sm-12.lblfooter-sm {
			text-align: center;
			height: 2em;
		}
	</style>
</head>
<body onLoad="init()">
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
		<li class="active"><a class="active">Informasi Produksi</a></li>
	    <li><a href="./">T e n t a n g</a></li>
	    <li><a href="<?php echo site_url('login') ?>">L o g i n</a></li>
	</ul>
  
	<div class="container-fluid fillmap">
		<div class="row">
			<div class="col-sm-12">
				<input hidden id="cordLat" />
				<input hidden id="cordLon" />
				<div id="map" class="map"></div>
			</div>
			<div class="col-sm-12 select">
				<div class="col-sm-5 float-left">
					<?php
          				$prop = array('', 'Aceh', 'Sumut', 'Sumbar', 'Riau', 'Jambi', 'Kep. Riau', 'Kep. Bangka', 'Sumsel', 'Bengkulu', 'Lampung', 'Banten', 'DKI Jakarta', 'Jabar', 'Jateng', 'DI Yogyakarta', 'Jatim', 'Bali', 'NTB', 'NTT', 'Kalut', 'Kaltim', 'Kalsel', 'Kalbar', 'Kalteng', 'Gorontalo', 'Sulut', 'Sulteng', 'Sulbar', 'Sulsel', 'Sultra', 'Maluku', 'Maluku Utara', 'Papua Barat', 'Papua');
          			?>
					<form method="POST" action="home">
						<select id="prop" name="prop" class="selarea">
							<option disabled value="" selected>Propinsi</option>
							<?php for ($r=1; $r<=34; $r++) { ?>
								<option value="<?php echo $r ?>"><?php echo $prop[$r] ?></option>
							<?php } ?>
						</select>
					</form>
				</div>
				<label class="lblfootdes">System Develop By Auto Virtual Media<br />Copyright &copy; 2019</label>
			</div>			

			<label class="lblfootmob">System Develop By Auto Virtual Media<br />Copyright &copy; 2019</label>
		</div>
	</div>
</body>
</html>