<aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url('assets/img/avatar2.png'); ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $this->session->userdata('nama'); ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                   
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN MENU NAVIGATION</li>
                        <li class="active treeview">
                            <li class="active treeview">
                                <a href="<?php echo base_url().'index.php/dashboard';?>">
                                    <i class="fa fa-dashboard"></i> <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'index.php/permalink';?>">
                                    <i class="icon-sphere"></i> <span>Proses</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().'index.php/form_c';?>">
                                    <i class="icon-pencil6"></i> <span>Buat Baru</span>
                                    <small class="label pull-right bg-red">3</small>
                                </a>
                            </li>
                        </li>
                    <li>
                            <a href="<?php echo base_url().'index.php/list_c';?>">
                                <i class="icon-city"></i> <span>Lihat Data</span>
                                <small class="label pull-right bg-red">3</small>
                            </a>
                        </li>

                         <li>
                            <a href="<?php echo base_url("index.php/pemb_c/");?>">
                                <i class="icon-city"></i> <span>Lihat Data Pembeli</span>
                                <small class="label pull-right bg-red">3</small>
                            </a>
                        </li>
                        
                        <li class="header">Keterangan</li>
                        <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Dalam Proses</a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-success"></i> Sudah</a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-info"></i> Belum</a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
 </aside>

           