<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
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
        <div class="utama-1">
            <div class="kotak">
                <div class="inden">
                    
                    <div class="judul">
                        <h2>Form Ubah Password</h2>
                    </div>
                    <form method='post' action="<?php echo base_url()?>index.php/dashboard/pswd">
                            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                            <div class="name">
                                <span><h3>Nama</h3></span>
                                <input disabled type="text" name="nm_penjual" class="form-control" value="<?php echo $nama;?>"/>
                            </div>
                            <div class="passwd">
                                <span><h3>Masukan password lama*</h3></span>
                                <input type="password" name="pss_lama" class="form-control"/>
                            </div>
                            <div class="passwd-baru">
                                <span><h3>Masukan password baru*</h3></span>
                                <input type="password" name="pss_baru" class="form-control"/>
                            </div>
                            <div class="passwd-baru">
                                <span><h3>Konfirmasi password baru</h3></span>
                                <input type="password" name="pss_baru_konf" class="form-control"/>
                            </div>
                            <div class="tombol">
                                <input type="submit" class="btn btn-success btn-width" value="Simpan Perubahan" />
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>