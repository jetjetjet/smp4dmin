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
                                    <h1 class="custom-font"><strong>Sambutan</strong> Kepala Sekolah</h1>
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
                                    <div class="table-responsive">
                                        <table class="table table-custom" id="editable-usage">
										
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID</th>
                                                <th>Kata Sambutan</th>
                                                <th>Foto</th>
                                                <th style="width: 160px;" class="no-sort">Aksi</th>
                                            </tr>
                                            </thead>
											<?php
												 $no= 1;
												if($sambutan)
												foreach($sambutan as $u) :
											
											?> 
  
                                            <tbody>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $u->id; ?></td>
                                                <td><?php echo $u->sambutan; ?></td>
                                                <td><img width="150px" height="200px" src="<?php echo site_url() ?>/assets/uploads/<?php echo $u->foto_kepsek; ?>"></img></td>
                                                <td class="actions">
												
												 <a href="<?php echo site_url() ?>Pengaturan/EditSambutan/<?php echo $u->id;?>"><span class="label bg-danger">Ubah</span></a>
												</td>
                                            </tr>
                                            
                                            </tbody>
											<?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                                <!-- /tile body -->

                            </section>



                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
    
                </div>

                
            </section>
            <!--/ CONTENT -->