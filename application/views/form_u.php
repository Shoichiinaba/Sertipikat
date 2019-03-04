<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url().'assets/assets/css/page.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/assets/css/bootstrap.min.css';?>" rel="stylesheet">
    <title>Form Input Baru</title>
	<style>
		body{
			background-color:#F2F2F2;
			padding:0px;
		}
	</style>

</head>

<body>
    <div class="content-wrapper">
        <div class="cont">
    	   <div class="cont-panel">
    		  <div id="menu_">
				
			     </div>
    		  <div id="judul-form">
    			<h2>Form Input Client Baru </h2>
    		</div>
    		<form method="post" action="<?php echo base_url()?>index.php/form_c/insert">
    		<div id="form-panel">
    			<div>
    				<span>No.SHM/Sertipikat*</span>
    				<input type="text" name="no_sertipikat" class="form-control" />
    			</div>
    			<div>
    				<span>Nama Penjual*</span>
    				<input type="text" name="nm_penjual" class="form-control" />
    			</div>
    			<div>
    				<span>Nama Pembeli*</span>
    				<input type="text" name="nm_pembeli" class="form-control" />
    			</div>
    			<div>
    				<span>Letak Tanah*</span>
    				<input type="text" name="almt_pembeli" class="form-control" />
    			</div>
    			
    			<div>
    				<span>Kategori</span>
    				<select name="kategori" class="form-control">
                        <option value="c_desa">C DESA</option>
                        <option value="sertipikat">SERTIPIKAT</option>
                    </select>
    			</div>
    			<div>
    				<input type="submit" class="btn btn-success btn-width" value="Kirim" />
    			</div>
    		</div>
    	</form>
    	</div>
    </div>
</div>
</body>
</html>