    <div class="content-wrapper">
        <section class="content">

             <?php 
        $data=$this->session->flashdata('sukses');
        if($data!=""){ ?>
        <div id="notifikasi" class="alert alert-info"><strong>Sukses! </strong> <?=$data;?></div>
        <?php } ?>

        <?php 
        $data2=$this->session->flashdata('error');
         if($data2!=""){ ?>
         <div id="notifikasi" class="alert alert-warning"><strong> Error! </strong> <?=$data2;?></div>
          <?php } ?>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                             Data Pembeli
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th width ='8%'>ID Pembeli</th>
                                            <th width ='12%'>Nama Pembeli</th>
                                            <th width ='12%'>Alamat Pembeli</th>
                                            <th width ='12%'>No Telephone</th>
                                            <th width ='4%'>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 0;
                                            foreach ($pem_v as $o){ $no++;?>
                                    <tr>
                                    <td><?php echo $o['id_pembeli']; ?></td>
                                    <td><?php echo $o['nm_pembeli']; ?></td>
                                    <td><?php echo $o['alamat']; ?></td>
                                    <td><?php echo $o['no_tel']; ?></td>
                                    <td align="center">

                                    <a href="<?php echo base_url(); ?>index.php/pemb_c/delete/<?php echo $o['id_pembeli'] ; ?>" onclick="return confirm('Anda yakin Ingin menghapus Data ?')">
                                    <button class='btn btn-danger btn-xs'><i class='glyphicon glyphicon-trash'></i>
                                    </button></a>

                                    <a href="<?php echo base_url(); ?>index.php/pemb_c/edit_view/<?php echo $o['id_pembeli'] ; ?>">
                                    <button class='btn btn-danger btn-xs'><i class='glyphicon glyphicon-edit'></i>
                                    </button></a>

                                    </tr>
                                    <?php } ?> 
                                    </td> 
                                    </tbody>
                                </table>
                                </div>
                                <br>

                                    <a href="<?php echo base_url()?>index.php/pemb_c/form/">
                <button type="submit" class="btn btn-info">
                    <i class="glyphicon glyphicon-print"></i>&nbsp; Input data Pembeli
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
    <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.2.4.min.js'); ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<php echo base_url('assets/temp/js/bootstrap.min.js'); ?>"></script>
    <script src="<php echo base_url('assets/temp/js/plugins/bootstrap.js'); ?>"></script>
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

