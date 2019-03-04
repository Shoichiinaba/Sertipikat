<?php
    $proses = trim($data[0]['proses']);
?>

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
    <title>Edit Proses</title>
	<style>
		.content-wrapper .cont{
            padding:12px 0 12px 0;

        }
	</style>

</head>

<body>
    <div class="content-wrapper">
        <div class="cont">
    	   <div class="cont-panel">
    		  <div id="judul-form">
    			<h2>Form Edit Proses Sertipikat</h2>
    		</div>
    		<form method="post" action="<?php echo base_url().'index.php/edit/editor';?>">
    		<div id="form-panel">
    			<div>
    				<span>No.SHM/Sertipikat</span>
    				<input disabled type="text" name="" class="form-control" value="<?php echo $data[0]['no_sertipikat'];?>"/>
                    <input type="hidden" name="no_sertipikat" class="form-control" value="<?php echo $data[0]['no_sertipikat'];?>"/>
    			</div>
    			<div>
    				<span>Nama Penjual</span>
    				<input disabled type="text" name="nm_penjual" class="form-control" value="<?php echo $data[0]['nm_penjual'];?>"/>
    			</div>
    			<div>
    				<span>Nama Pembeli</span>
    				<input disabled type="text" name="nm_pembeli" class="form-control" value="<?php echo $data[0]['nm_pembeli'];?>"/>
    			</div>
    			
                <div>
    				<span>Kategori</span>
    				<input disabled type="text" name="kategori" class="form-control" value="<?php echo $data[0]['kategori'];?>"/>
    			</div>
                <div>
    				<span>Proses</span>
                    <?php
                        echo "<textarea class='form-control' rows='3' name='proses'>$proses</textarea>";
                    ?>
                    
    			</div>
    			<div>
    				<input type="submit" class="btn btn-success btn-width" value="Edit" />
    			</div>
    		</div>
    	</form>
    	</div>
    </div>
</div>
</body>
</html>

