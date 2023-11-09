<!-- IonIcons -->
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<script href="https://github.com/inorganik/CountUp.js"></script>
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Theme style <link rel="stylesheet" href="assets/dist/css/adminlte.min.css"> -->
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<!-- ChartJS <script src="plugins/chart.js/Chart.min.js"></script> -->
<!-- Content Wrapper. Contains page content
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
	#blocksdisplay {
	border-radius: 2px;
	border: 2px solid #00a0a0;
	padding: 4px;
	width: 99%;
	height: 90px;
	}
	#assetinfo {
	border-radius: 2px;
	border: 2px solid #00a0a0;
	padding: 4px;
	width: 99%;
	height: 100%;
	}
	#blocksinfo {
	border-radius: 1px;
	border: 1px solid #7FFF00;
	padding: 4px;
	width: 99%;
	height: 60px;
	}
	#rcorners2 {
	border-radius: 10px;
	border: 1px solid #7FFF00;
	padding: 10px;
	width: 100%;
	height: 390px;
	}
	.shake {
	animation: shake2 2s ease infinite;
	}
	#rcorners2 span2:hover
	{
	animation: shake 2s ease infinite;
	}
	@keyframes shake {
	0%,
	100% {
	transform: translateX(0);
	}
	90% {
	transform: translateX(-20px);
	}
	80% {
	transform: translateX(20px);
	}
	}
	span:hover
	{
	animation: shake2 2s ease infinite;
	}
	.fade-out-right {
	animation: fade-out-right 2s ease infinite;
	}
	@keyframes fade-out-right {
	0% {
	opacity: 1;
	transform: translateX(0);
	}
	100% {
	opacity: 0;
	transform: translateX(20px);
	}
	}
	.gelatine
	{
	animation: gelatine 0.5s infinite;
	}
	@keyframes gelatine {
	from,
	to {
	transform: scale(1, 1);
	}
	25% {
	transform: scale(.25, .75);
	}
	50% {
	transform: scale(.50, .50);
	}
	75% {
	transform: scale(.75, .25);
	}
	}
	.flash {
	animation: flash 500ms ease infinite alternate;
	}
	@keyframes flash {
	from {
	opacity: 1;
	}
	to {
	opacity: 0;
	}
	}
	span svg:hover
	{
	animation: fade-out-right 2s ease infinite;
	}
	.grid-container {
	display: grid;
	grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
	grid-gap: 55px;
	}
	@import url(https://fonts.googleapis.com/css?family=Poiret + One);
	*,
	*:before,
	*:after {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	}
	:root,
	html,
	body {
	font-family: "Poiret One", "Open Sans", "Helvetica Neue", "Helvetica", "Arial",
	sans-serif;
	/*background: #000000!important;*/
	color:#f6f6f6;
	}
	.cell {
	display: inline-block;
	width: 100%;
	text-align: center;
	}
	.line {
	display: inline-block;
	width: 100px;
	height: 5px;
	background: whiteSmoke;
	box-shadow: 4px -40px 60px 5px rgb(26, 117, 206) inset;
	}
	.circle {
	display: inline-block;
	width: 80px;
	height: 80px;
	border-radius: 50%;
	background: whiteSmoke;
	box-shadow: 4px -40px 60px 5px rgb(26, 117, 206) inset;
	}
	.circle-icon {
	background: #ffc0c0;
	width: 80px;
	height: 80px;
	border-radius: 50%;
	text-align: center;
	line-height: 80px;
	vertical-align: middle;
	padding: 30px;
	}
	.icon-background {
	color: #008B8B;
	}
	.square {
	display: inline-block;
	width: 100px;
	height: 100px;
	border-radius: 20px;
	background: #222;
	/*box-shadow: 4px -40px 60px 5px rgb(26, 117, 206) inset;*/
	}
	.foo {
	float: left;
	width:  20px;
	height: 20px;
	margin: 5px;
	border: 1px solid rgba(0, 0, 0, .2);
	}
	.stop {
	display: inline-block;
	width: 10px;
	height: 10px;
	border-radius: 50%;
	background: whiteSmoke;
	box-shadow: 1px -40px 60px 8px rgb(60, 179, 113) inset;
	}
	.aliceblue {
	background: #F0F8FF;
	}
	.blue {
	background: #13b4ff;
	}
	.purple {
	background: #ab3fdd;
	}
	.wine {
	background: #ae163e;
	}

div#track_information {
    width: 100%;
    display: block;
}
.track_label {
    border: 1px solid #ffffff;
    border-radius: 10px;
    padding: 10px;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Track &  Trace</li>
		</ol>
		<div class="col-md-12 col-xs-12">
		<form class="form-inline ml-auto" id="frmUsers" name="frmUsers" method="POST" action="<?php echo base_url('track/trackAssetData/') ?>">
		<input class="form-control" type="text" placeholder=<?php echo $searchqrcode; ?> aria-label="Search" id="searchqrcode" name="searchqrcode">
      <button class="btn btn-default btn-rounded btn-sm my-0 ml-sm-2" style='font-size:14px;color:black'  type="submit">Search QR</button>

    </form>

		</div>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="box" style="background:#000;" >
					<!-- /.box-header -->
					<div class="box-body">
						<div id="rcorners2" class="grid-container">
							<div id="M" class="grid-child">
								<p style='font-size:14px;color:white;'>Manufacturer</p>
								<span class="fa-stack fa-2x">
									<i class="fa fa-circle fa-stack-2x icon-background"></i>
									<i class='fas fas fa-industry fa-stack-1x'></i>
									<svg width="500" height="500">
										<defs>
											<marker id="arrowhead" markerWidth="10" markerHeight="7"
											refX="0" refY="1.5" orient="auto" fill="#008B8B">
												<polygon points="0 0, 3 1.5, 0 3"/>
											</marker>
											<marker id="pendingarrowhead" markerWidth="10" markerHeight="7"
											refX="0" refY="1.5" orient="auto" fill="#000">
												<polygon points="0 0, 3 1.5, 0 3"/>
											</marker>
										</defs>
										<?php 
										  if ( intval($AssetTrace) >= 1) { ?>
<line x1="62" y1="30" x2="112" y2="30" style="stroke:#008B8B; stroke-width:4" marker-end="url(#arrowhead)" "/>" <line x1="118" y1="30" x2="180" y2="30" style="stroke:#008B8B; stroke-width:4" "/>" 							<?php  } else { ?> 
<line x1="62" y1="30" x2="110" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,2"  marker-end="url(#arrowhead)" "/>" <line x1="123" y1="30" x2="180" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,4" "/>"
										<?php } ?>	
									</svg>
								</svg>
							</span>
							<p></p>
							<p style="background: #222; border: 1px solid #fff;
							border-radius:10px;font-size:10px; padding:4px; margin:0px; color:yellow">
						    <br><?php if($AssetStatus0 == "AssetCreated"){ ?>Asset Created at<?php }?><br>
							<br><?php echo $DateWhen0; ?><br>
							<br><?php echo $Duration0; ?><br>
							</p>
						</div>
						<div id="S" class="grid-child">
							<p style='font-size:14px;color:white;'>QC/Regulator</p>
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x icon-background"></i>
								<i class='fas fas fa-user-secret fa-stack-1x'></i>
								<svg width="500" height="500">
								<?php if ($AssetTrace>=2) { ?>
										<line x1="62" y1="30" x2="112" y2="30" style="stroke:#008B8B; stroke-width:4" marker-end="url(#arrowhead)" "/>" <line x1="118" y1="30" x2="180" y2="30" style="stroke:#008B8B; stroke-width:4" "/>"											
										<?php } else { ?> 
										<line x1="62" y1="30" x2="110" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,2"  marker-end="url(#arrowhead)" "/>" <line x1="123" y1="30" x2="180" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,4" "/>"
									<?php } ?>
								</svg>
							</svg>
						</span>
						<p></p>
						<p style="background: #222; border: 1px solid #fff;border-radius:10px;font-size:10px; padding:4px; margin:0px; color:yellow">
							<br><?php if($AssetStatus1 == "MfgSendToQC"){ ?>QC Req Arrived at<?php }?><br>
							<br><?php echo $DateWhen1; ?><br>
							<br><?php if($AssetStatus2 == "QCDone"){ ?>QC Report Submitted at<?php }?><br>
							<br><?php echo $DateWhen2; ?><br>
							<br><?php echo $Duration2; ?><br>
						</p>
					</div>
					<div id="L1" class="grid-child green">
					<p style='font-size:14px;color:white'>Logistics</p>
					<span class="fa-stack fa-2x">
						<i class="fa fa-circle fa-stack-2x icon-background"></i>
						<i class='fas fa-shipping-fast fa-stack-1x'></i>
						<svg width="500" height="500">
							<?php if ($AssetTrace>=3) { ?>
								<line x1="62" y1="30" x2="112" y2="30" style="stroke:#008B8B; stroke-width:4" marker-end="url(#arrowhead)" "/>" <line x1="118" y1="30" x2="180" y2="30" style="stroke:#008B8B; stroke-width:4" "/>"											
								<?php } else { ?> 
								<line x1="62" y1="30" x2="110" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,2"  marker-end="url(#arrowhead)" "/>" <line x1="123" y1="30" x2="180" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,4" "/>"
							<?php } ?>
						</svg>
					</svg>
				</span><p></p>
						<p style="background: #222; border: 1px solid #fff;border-radius:10px;font-size:10px; padding:4px; margin:0px; color:yellow">
							<br><?php if($AssetStatus3 == "PaFSendToLsp"){ ?>Order Accepted at<?php }?><br>
							<br><?php echo $DateWhen3; ?><br>
							<br><?php if($AssetStatus4 == "LspSendToWh"){ ?>Order Handover to Wholesaler at<?php }?><br>
							<br><?php echo $DateWhen4; ?><br>
							<br><?php echo $Duration4; ?><br>
						</p>
						</p>
					</div>
					<div id="W" class="grid-child">
						<p style='font-size:14px;color:white'>Wholesaler</p>
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x icon-background"></i>
							<i class='fas fas fa-warehouse fa-stack-1x'></i>
							<svg width="500" height="500">
								<?php if ($AssetTrace>=4) { ?>
									<line x1="62" y1="30" x2="112" y2="30" style="stroke:#008B8B; stroke-width:4" marker-end="url(#arrowhead)" "/>" <line x1="118" y1="30" x2="180" y2="30" style="stroke:#008B8B; stroke-width:4" "/>"											
									<?php } else { ?> 
									<line x1="62" y1="30" x2="110" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,2"  marker-end="url(#arrowhead)" "/>" <line x1="123" y1="30" x2="180" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,4" "/>"
								<?php } ?>	
							</svg>
						</svg>
					</span><p></p>
						<p style="background: #222; border: 1px solid #fff;border-radius:10px;font-size:10px; padding:4px; margin:0px; color:yellow">
							<br><?php if($AssetStatus4 == "LspSendToWh"){ ?>Order Recived at<?php }?><br>
							<br><?php echo $DateWhen4; ?><br>
							<br><?php if($AssetStatus5 == "WhSendToPh"){ ?>Order Handover to Pharmacy at<?php }?><br>
							<br><?php echo $DateWhen5; ?><br>
                            <br><?php echo $Duration5; ?><br>
						</p>
					</p>
				</div>
				<div id="P" class="grid-child green">
			<p style='font-size:14px;color:white'>Pharmacy</p>
			<span class="fa-stack fa-2x">
				<i class="fa fa-circle fa-stack-2x icon-background"></i>
				<i class='fas fa-prescription fa-stack-1x'></i>
				<svg width="500" height="500">
						<?php if ($AssetTrace>=5) { ?>
							<line x1="62" y1="30" x2="112" y2="30" style="stroke:#008B8B; stroke-width:4" marker-end="url(#arrowhead)" "/>" <line x1="118" y1="30" x2="180" y2="30" style="stroke:#008B8B; stroke-width:4" "/>"											
							<?php } else { ?> 
							<line x1="62" y1="30" x2="110" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,2"  marker-end="url(#arrowhead)" "/>" <line x1="123" y1="30" x2="180" y2="30" style="stroke:#fff; stroke-width:4" stroke-dasharray="4,4" "/>"
						<?php } ?>
					</svg>
			</span><p></p>
						<p style="background: #222; border: 1px solid #fff;border-radius:10px;font-size:10px; padding:4px; margin:0px; color:yellow">
							<br><?php if($AssetStatus5 == "WhSendToPh"){ ?>Drug Recived at<?php }?><br>
							<br><?php echo $DateWhen5; ?><br>
							<br><?php if($AssetStatus6 == "PhSellToCo"){ ?>Drug Sold to Customer at<?php }?><br>
							<br><?php echo $DateWhen6; ?><br>
							<br><?php echo $Duration6; ?><br>
						</p>
			</p>
		</div>
			<div id="D" class="grid-child">
				<p style='font-size:14px;color:white'>Customer</p>
				<span class="fa-stack fa-2x">
					<i class="fa fa-circle fa-stack-2x icon-background"></i>
					<i class='fas fa-user  fa-stack-1x'></i>
					<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
					
				</svg>
			</span>
			<p></p>
						<p style="background: #222; border: 1px solid #fff;border-radius:10px;font-size:10px; padding:4px; margin:0px; color:yellow">
							<br><?php if($AssetStatus6 == "PhSellToCo"){ ?>Drug Recived by Customer at<?php }?><br>
							<br><?php echo $DateWhen6; ?><br>
							<!-- br><?php echo $Duration5; ?><br -->
						</p>
			</p>
		</div>
		<div id="track_information" class="grid-child">
			<p style='font-size:14px;color:white;font-weight:bold;'>QRCode</p>
			<div class="track_label">
			<p>QR Number: </p>
			<p>Manufacturer: Ord29u32020</p>
			<p>Asset Name: Lenalidomide</p>
			<p>Asset Type: Tablet/Capsule</p>
			<p>Asset Qty: 1134</p>
			<p>Owner Who: Celgene</p>
			<p>Gps Location: 51.5112627, -0.4499933</p>
			<p>Transcation:<br> Production Manager</p>
			<p>Asset Status:<br> AssetCreated</p>
			<p>Time Stamp:<br> 2020-11-05 12:54:56.223 +0000 UTC</p>
			</div>
		</div>
		
	</div>
</div>
</section>
<div class="container">
	<div class="foo blue"></div>
	<div class="foo purple"></div>
	<div class="foo wine"></div>
	<div class="foo aliceblue"></div>
</div>
<div>
	<span style='font-size:11px;color:black; text-align: center;'>
		<marquee behavior="scroll" scrollamount="3,0"  direction="left"><b style='text-align: center;'>DiZiTrade Platform :</b>Improving transparency, accountability, and integrity of the supply chain by ensuring compliance with Global Standard good manufacturing, distribution, and pharmacy practices.
		</marquee>
	</span>
</div>
<!-- /.content -->
</div>
<script type="text/javascript">
$(document).ready(function(){ 
		$("#button").click(function(){ 	
	  
		var searchqrcode = (document.getElementById('searchqrcode').value);
		
		//alert(searchqrcode);
		
		$.ajax({
			type:"post",
			url:"<?php echo base_url();?>Track/TrackAssetData/",
			//data:"&QRCode="+searchqrcode,
			success: function(content) {
				//$("#main-content").html(content);
				//$("#cancelupdate").click();
			}
			//,error: function(e){ alert('Error: ' + e); }
		});
		return false;
		
	});
	});
</script>
