
<body>

<div class="content-wrapper">
    <section class="content">
      <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                             List Data Transaksi Client
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <!--<th>No</th>-->
                                            <th>No.SHM</th>
                                            <th width ='12%'>Nama Penjual</th>
                                            <th width ='12%'>Nama Pembeli</th>
                                            <th width ='12%'>Letak Tanah</th>
                                            <th>Kategori</th>
                                            <th>Proses Tahapan</th>
                                            <th>Tanggal</th>
                                            <th width ='11%'>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 0;
                                            foreach ($table as $o){ $no++;?>

                                    <tr>
                                   <!-- <td><?php echo $no; ?></td>-->
                                    <td><?php echo $o['no_sertipikat']; ?></td>
                                    <td><?php echo $o['nm_penjual']; ?></td>
                                    <td><?php echo $o['nm_pembeli']; ?></td>
                                    <td><?php echo $o['almt_pembeli']; ?></td>
                                    <td><?php echo $o['kategori']; ?></td>
                                    <td><?php echo $o['proses']; ?></td>
                                    <td><?php echo $o['tanggal']; ?></td>
                                    <td align="center">

                                   <a href="<?php echo base_url(); ?>index.php/permalink/delete/<?php echo $o['no_sertipikat']; ?>" onclick="return confirm('Anda yakin Ingin menghapus Data ?')">
                                    <button class='btn btn-danger btn-xs'><i class='glyphicon glyphicon-trash'></i>
                                    </button></a>

                                    <a href="<?php echo base_url(); ?>index.php/laporan/laprec/<?php echo $o['no_sertipikat']; ?>">
                                    <button class='btn btn-danger btn-xs'><i class='fa fa-print'></i>
                                    </button></a>
                                    
                                    <a href="<?php echo base_url(); ?>index.php/edit/get_edit/<?php echo $o['no_sertipikat']; ?>">
                                    <button style='margin-top:1px;' class='btn btn-danger btn-xs'><i class='fa fa-edit'></i>
                                    </button></a>
                                    
                                    </td>
                                </tr>

                    
                                    <?php } ?>  
                                </tbody>
                             </table>
                                </div>
                            <div id="print_b">
                <a href="<?php echo base_url()?>index.php/cetak_c/laptrx">
                <button type="submit" class="btn btn-primary">
                    <i class="glyphicon glyphicon-print"></i>&nbsp; Cetak
                </button>
            </a>
             <a href="<?php echo base_url()?>index.php/C_excel/export_excel">
                <button type="submit" class="btn btn-primary">
                    <i class="glyphicon glyphicon-print"></i>&nbsp; EX to Exel
                </button>
            </a>
            </div>
                </div>
            </div>
    </div>
         </div>   

         </section>
         </div> 
        
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-1.10.2.js'); ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<php echo base_url('assets/temp/js/bootstrap.min.js'); ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/temp/js/jquery.metisMenu.js'); ?>"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url('assets/temp/js/dataTables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assets/temp/js/dataTables/dataTables.bootstrap.js'); ?>"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url ('assets/temp/js/custom.js'); ?>"></script>
    
   
</body>
</html>
