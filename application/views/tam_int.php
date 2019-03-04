<!DOCTYPE html>
<html>
<head>


</head>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/info.css">
 <script type="text/javascript" src="<?php echo base_url()?>assets/assets/js/jquery.js"></script>
	<body>
       <style>
	.right{
		float: right;
	}
	.left{
		float:left;
	}
</style>
<div id="print_style" style="display:none;">
.info{
	background-color:transparent;
	padding-bottom:5px;
	padding-top:15px;
	padding-left:5px;
	margin-top:0px;
	height:60px;
	box-sizing:border-box;
}
.info:first-child{
	margin-top:0px;
}
.font-antrian{
		color:black;
		font-size:20px;
		font-weight:bold;
}
.font-acce{
	font-family:Arial;
	font-size:20px;
	color:black;
}
.panel-info{
	background-color:transparent;
	width:150px;
	float:left;
}
.panel-info-text{
	background-color:transparent;
}
.font-bold{
	font-weight:bold;
}
.info:after{
	content:"";
	display:block;
	clear:both;
}
</div>
    <div class="container " role="main">

    <div class="row" style="margin-top:  80px;">
</div>
</div>

<div class="row">
	<div class="container ">
		<div class=" col-lg-push-3 col-lg-6">
	  		<div id="form-center">
				<div class="panel panel-primary">
					

					<div class="panel-heading">
						<h3 class="panel-title">Informasi Data Client Input Baru</h3>
					</div>
					
					<div class="panel-body">
						<div class="info">
							<div class="panel-info font-acce">No.SHM</div>
							<div class="panel-info-text font-acce">: <?php echo $no_sertipikat;?></div>
						</div>
						
						<div class="info">
							<div class="panel-info font-acce">Nama Penjual</div>
							<div class="panel-info-text font-acce">: <?php echo $nm_penjual;?></div>
						</div>
						
						<div class="info">
							<div class="panel-info font-acce">Nama Pembeli</div>
							<div class="panel-info-text font-acce">: <?php echo $nm_pembeli;?></div>
						</div>
						
						<div class="info">
							<div class="panel-info font-acce">Kategori</div>
							<div class="panel-info-text font-acce">: <?php echo $kategori;?></div>
						</div>
						
			            <div class="panel-tombol">
			            	<div class="form-group">
								<button class="btn btn-primary left" onclick="iny.inputData().print();"><i class="glyphicon glyphicon-hdd"></i> Print</button>
						  
						  	<a class="right" href="<?php echo base_url("index.php/permalink");?>">
				                <button type="submit" class="btn btn-primary">
				                    <i class="glyphicon glyphicon-arrow-right"></i>&nbsp; Lanjut
				                </button>
			            	</a>

						  </div>

						  
			           </div>
			       </div>

            </div>
        </div>
			  
		</div>
			
		</div>
		
	 </div>
						<!-- /footer -->
                <!-- /content area -->
            <!-- /main content -->
        <!-- /page content -->
<iframe class="frame" name="print_frames"></iframe>
<script>
	function getPrint(){
		this.ID = [];
		this.inputData = function(){
			this.ID['no_sertipikat'] = '<?php echo $no_sertipikat;?>';
			this.ID['nm_penjual'] = '<?php echo $nm_penjual;?>';
			this.ID['nm_pembeli'] = '<?php echo $nm_pembeli;?>';
			this.ID['kategori'] = '<?php echo $kategori;?>';
			return this;
		}
		this.print = function(){
			var tag = window.frames["print_frames"];
			var style = document.getElementById('print_style');
			var inner;
			inner = '<style>'+style.innerHTML+'</style>';
			// perulan
			inner+='<div class="info"><div class="panel-info font-acce">No.SHM</div><div class="panel-info-text font-antrian">: '+this.ID['no_sertipikat']+'</div></div><hr>';
			inner+='<div class="info"><div class="panel-info font-acce">Nama Penjual</div><div class="panel-info-text font-acce">: '+this.ID['nm_penjual']+'</div></div><hr>';
			inner+='<div class="info"><div class="panel-info font-acce">Nama Pembeli</div><div class="panel-info-text font-acce">: '+this.ID['nm_pembeli']+'</div></div>';
			inner+='<div class="info"><div class="panel-info font-acce">Kategori</div><div class="panel-info-text font-acce">: '+this.ID['kategori']+'</div></div><hr>';
			// perulangan
			var Final = inner;
			tag.document.body.innerHTML = Final;
			tag.window.focus();
			tag.window.print();
			console.log();
		}
	}
	var iny = new getPrint();
</script>
</body>
</html>















