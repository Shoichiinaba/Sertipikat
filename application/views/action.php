
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url().'assets/assets/css/page_.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/assets/css/font-awesome.min.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/assets/css/bootstrap.min.css';?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js';?>"></script>
    <title>.::.</title>

</head>
              
<body>
	<div class="content-wrapper">
	<div class="root-panel">
		<div class="panel_body">
			<div id="judul-halaman">
					<h2>Kendali Proses Pembuatan Sertipikat</h2>
			</div>
			<div class="pencarian">
					<input type="text" name="cari" placeholder="Masukan nomor sertipikat" />
					<button type="button" id="get_cari">Cari</button>
					<span id="loader">Loading...</span>
			</div>
			<div id="keterangan">
				<nav>
					<span class="sp-left">Nama</span>
					<span class="sp-right NAMA">(none)</span>
					<div style="clear:both;"></div>
				</nav>
				<nav>
					<span class="sp-left">No.SHM</span>
					<span class="sp-right NOSHM">(none)</span>
					<div style="clear:both;"></div>
				</nav>
				<nav>
					<span class="sp-left">Kategori</span>
					<span class="sp-right KATEGORI">(none)</span>
					<div style="clear:both;"></div>
				</nav>
			</div>
			<div class="desa">
				<div class="form-group">
	                <div id="judul">C DESA</div> 
	            </div>
				<fieldset disabled>
					<div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="pn_dokumen">Pengumpulan Dokumen</button>
	                     </center>  
	                </div>
	                <div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="pengukuran">Pengukuran</button>
	                     </center>  
	                </div>
	                <div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="pn_pajak">Pengajuan Pajak</button>
	                     </center>  
	                </div>
	                <div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="pn_akta">Pendaftaran Akta</button>
	                     </center> 
	                </div>
	                <div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="st_pembeli">Sertipikat jadi An. Pembeli</button>
	                     </center>  
	                </div>
	            </fieldset>
	            
			</div>
			<div class="sert">
                
				<div class="form-group">
	                <div id="judul">SERTIPIKAT</div> 
	            </div>
				<fieldset disabled>
					<div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="pn_dokumen">Pengumpulan Dokumen</button>
	                     </center>  
	                </div>
	                <div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="ploting">Ploting</button>
	                     </center>  
	                </div>
	                <div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="pn_sertipikat">Pengecekan Sertipikat</button>
	                     </center>  
	                </div>
	                <div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="zona">Zona</button>
	                     </center>  
	                </div>
	                <div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="IPH">IPH</button>
	                     </center>  
	                </div>
	                <div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="pn_pajak">Pengajuan Pajak</button>
	                     </center>  
	                </div>
	                <div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="pn_akta">Pendaftaran Akta</button>
	                     </center>  
	                </div>
	                <div class="form-group">
	                     <center>
	                     	<button type="button" class="belum" alt="st_pembeli">Sertipikat Jadi An. Pembeli</button>
	                     </center>  
	                </div>
	            </fieldset>
			</div>
		</div>
	</div> 
</div>
</body>
<script type="text/javascript" src="<?php echo base_url().'assets/assets/js/enggine2.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/assets/js/enggine.js';?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/assets/js/btnclicked.js';?>"></script>
</html>
