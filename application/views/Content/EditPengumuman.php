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
                                    <h1 class="custom-font"><strong>Ubah</strong> Pengumuman</h1>
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
								<?php foreach ($pengumuman->result() as $p) { ?>
                                <div class="tile-body">

                                    <form action="<?php echo site_url('Pengumuman/Update'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data" role="form">
									<?php if ($error == 'true') { ?>
									<div class="alert alert-danger alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
										<b>ERROR !!</b> <br>
										<?php echo validation_errors(); ?>
									</div>
									<?php } ?>
                                        <div class="form-group">
                                            <label for="judul" class="col-sm-2 control-label">Judul Pengumuman</label>
                                            <div class="col-sm-10">
                                                <input name='judul' value="<?php echo $p->judul ?>" type="text" class="form-control" id="judul">
                                            </div>
                                        </div>
										<hr class="line-dashed line-full"/>
										<div class="form-group">
                                            <label for="pengumuman" class="col-sm-2 control-label">Isi Pengumuman</label>
                                            <div class="col-sm-10">
                                                <textarea name="pengumuman"  class="texteditor"><?php echo $p->isi ?></textarea>
                                            </div>
                                        </div> 
										
										<div class="form-group">
                                            <label class="col-sm-2 control-label">Dari Tanggal</label>
                                            <div class="col-sm-10">

                                                <div class='input-group datepicker w-360 mt-10' data-format="L">
                                                    <input value="<?php echo $p->dari ?>" name="dari" type='text' class="form-control" />
                                                    <span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                                </div>

                                            </div>
                                        </div> 
										
										<div class="form-group">
                                            <label class="col-sm-2 control-label">Sampai Tanggal</label>
                                            <div class="col-sm-10">

                                                <div class='input-group datepicker w-360 mt-10' data-format="L">
                                                    <input value="<?php echo $p->sampai ?>" name="sampai" type='text' class="form-control" />
                                                    <span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                                </div>

                                            </div>
                                        </div> 
										
										<div class="form-group">
                                            <label class="col-sm-2 control-label">Status</label>
                                            <div class="col-sm-10">
                                                <select tabindex="3" class="chosen-select" style="width: 240px;" name="status">
                                                    <optgroup label="status">
													<?php if ($p->status == "Tunda") echo "<option value='Tunda' selected>Tunda</option>";
													else echo "<option value='Tunda'>Tunda</option>";
													if ($p->status == "Terbit") echo "<option value='Terbit' selected>Terbit</option>";
													else echo "<option value='Terbit'>Terbit</option>"; ?>
                                                    </optgroup>
                                                   
                                                </select>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <button type="submit" class="btn btn-default">Simpan</button>
                                                <button type="reset" class="btn btn-lightred">Bantal</button>
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