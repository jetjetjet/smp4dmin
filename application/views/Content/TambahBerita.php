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
                                    <h1 class="custom-font"><strong>Tambah</strong> Berita</h1>
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

                                    <form action="<?php echo site_url('Berita/TambahBerita'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data" role="form">
									<?php if ($error == 'true') { ?>
									<div class="alert alert-danger alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
										<b>ERROR !!</b> <br>
										<?php echo validation_errors(); ?>
									</div>
									<?php } ?>
                                        <div class="form-group">
                                            <label for="judul" class="col-sm-2 control-label">Judul Berita</label>
                                            <div class="col-sm-10">
                                                <input name='judul' type="text" class="form-control" id="judul">
                                            </div>
                                        </div>
										<hr class="line-dashed line-full"/>
										<div class="form-group">
                                            <label for="berita" class="col-sm-2 control-label">Isi Berita</label>
                                            <div class="col-sm-10">
                                                <textarea name="berita" class="texteditor"></textarea>
                                            </div>
                                        </div> 
										
										<div class="form-group">
                                            <label for="tipe" class="col-sm-2 control-label">Tipe</label>
                                            <div class="col-sm-10">
                                                <input name='tipe' type="text" class="form-control" id="tipe">
                                            </div>
                                        </div> 
										
										<div class="form-group">
                                            <label class="col-sm-2 control-label">Status</label>
                                            <div class="col-sm-10">
                                                <select tabindex="3" class="chosen-select" style="width: 240px;" name="status">
                                                    <optgroup label="status">
                                                        <option value="Tunda">Tunda</option>
                                                        <option value="Terbit">Terbit</option>
                                                    </optgroup>
                                                   
                                                </select>
                                            </div>
                                        </div>

										
										<div class="form-group">
                                            <label class="col-sm-2 control-label">Foto</label>
                                            <div class="col-sm-10">
                                                <input name="gambar" type="file" class="filestyle" data-buttonText="Find file" data-iconName="fa fa-inbox">
                                            </div>
                                        </div>
 
                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <button type="submit" class="btn btn-default">Simpan</button>
                                                <button type="reset" class="btn btn-lightred">Reset</button>
                                            </div>
                                        </div>

                                    </form>

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