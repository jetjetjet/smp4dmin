<!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <aside id="sidebar">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Navigation <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        <ul id="navigation">
                                            
											<li class="<?php if($this->uri->segment(1) == 'Welcome'){echo "active";}?>">
											
											<a href="<?php echo base_url()?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
											</li>
                                           <li class="<?php if($this->uri->segment(1) == "User" || $this->uri->segment(1) == "Pengaturan" || $this->uri->segment(1) == "Pengaturan"){echo "active";}?>">
                                                <a role="button" tabindex="0"><i class="fa fa-envelope-o"></i> <span>Pengaturan</span> </a>
                                                <ul>
                                                    <li class="<?php if($this->uri->segment(2) == "index"){echo "active";}?>"><a href="<?php echo site_url('User/index');?>"><i class="fa fa-caret-right"></i> User</a></li>
                                                    <li class="<?php if($this->uri->segment(2) == "Sambutan"){echo "active";}?>"><a href="<?php echo site_url('Pengaturan/Sambutan');?>"><i class="fa fa-caret-right"></i>Sambutan Kepala Sekolah</a></li>
                                                    <li class="<?php if($this->uri->segment(2) == "Identitas"){echo "active";}?>"><a href="<?php echo site_url('Pengaturan/Identitas');?>"><i class="fa fa-caret-right"></i>Identitas Sekolah</a></li>
                                                </ul>
                                            </li>
                                            
                                            <li class="<?php if($this->uri->segment(1) == "Berita"){echo "active";}?>">
											<a href="<?php echo site_url('Berita');?>"><i class="fa fa-calendar-o"></i> <span>Berita</span> </a>
											</li>
											<li class="<?php if($this->uri->segment(1) == "Pengumuman"){echo "active";}?>">
											<a href="<?php echo site_url('Pengumuman');?>"><i class="fa fa-calendar-o"></i> <span>Pengumuman</span> </a>
											</li>
											<li class="<?php if($this->uri->segment(1) == "Gallery"){echo "active";}?>">
                                            <li><a href="<?php echo site_url('Gallery'); ?>"><i class="fa fa-bar-chart-o"></i> <span>Gallery</span></a></li>

                                            
                                        </ul>
                                        <!--/ NAVIGATION Content -->


                                    </div>
                                </div>
                            </div>
                            
                            

                    </div>


                </aside>
                <!--/ SIDEBAR Content -->