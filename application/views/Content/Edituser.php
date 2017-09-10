<!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-dashboard">

                    <div class="pageheader">

                        <h2> SMPN 2 Sungai Penuh<span></span></h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url(); ?>"><i class="fa fa-home">Beranda</i></a>
                                </li>
                                
                            </ul>

                            <div class="page-toolbar">
                                <a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
                                    <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
                                </a>
                            </div>

                        </div>

                    </div>
					
					<!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">
                            <!-- tile -->
                            <section class="tile">
								
                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm"> 
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li> 
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">
								<?php foreach ($user->result() as $u) { ?>
                                    <form action="<?php echo site_url('User/Update'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data" role="form">

                                        <div class="form-group">
                                            <label for="nama" class="col-sm-2 control-label">ID</label>
                                            <div class="col-sm-10">
                                                <input name='id' type="text" value="<?php echo $u->id_user ?>" class="form-control" id="id" readonly>
                                            </div>
                                        </div>
										
										<div class="form-group">
                                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input name='nama' type="text" value="<?php echo $u->nama ?>" class="form-control" id="nama">
                                            </div>
                                        </div>
										<hr class="line-dashed line-full"/>
										<div class="form-group">
                                            <label for="email" class="col-sm-2 control-label">e-Mail</label>
                                            <div class="col-sm-10">
                                                <input name='email' type="text" value="<?php echo $u->email ?>" class="form-control" id="email">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>

                                        

                                        <hr class="line-dashed line-full"/>
										
										<div class="form-group">
                                            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input name="alamat" type="text" value="<?php echo $u->alamat ?>" class="form-control" id="alamat">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>
                                        
                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <button type="submit" class="btn btn-default">Simpan</button>
												
                                                <button type="reset" class="btn btn-lightred">Batal</button>
                                            </div>
                                        </div>

                                    </form>
								<?php } ?>
                                </div>
                                <!-- /tile body -->
							 
                            </section>
                            <!-- /tile -->



                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
    
                </div>

                
            </section>
            <!--/ CONTENT -->