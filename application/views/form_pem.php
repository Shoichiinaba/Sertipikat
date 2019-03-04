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
			b.content-wrapper .cont{
            padding:12px 0 12px 0;
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
    			<h2>Form Input Data Pembeli </h2>
    		</div>
    		<form method="post" action="<?php echo base_url()?>index.php/pemb_c/insert">
    		<div id="form-panel">
    			<div>
                    <span>Id Pembeli*</span>
                    <input type="text" name="id_pembeli" class="form-control" />
                </div>
    			<div>
    				<span>Nama Pembeli*</span>
    				<input type="text" name="nm_pembeli" class="form-control" />
    			</div>
    			<div>
    				<span>alamat*</span>
    				<input type="text" name="alamat" class="form-control" />
    			</div>
    			<div>
                    <span>No Telephon*</span>
                    <input type="text" name="no_tel" class="form-control" />
                </div>

    				<input type="submit" class="btn btn-success btn-width" value="Kirim" />
    			</div>
    		</div>
    	</form>
    	</div>
    </div>
</div>
</body>
</html>