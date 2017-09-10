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
                                    <h1 class="custom-font"><strong>Form</strong> Elements</h1>
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
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <form class="form-horizontal" role="form">

                                        <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Normal</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input01">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <label for="input02" class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="input02">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <label for="input03" class="col-sm-2 control-label">Help text</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input03">
                                                <span class="help-block mb-0">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <label for="input04" class="col-sm-2 control-label">Placeholder</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input04" placeholder="This is placeholder...">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <label for="input05" class="col-sm-2 control-label">Rounded</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control rounded" id="input05">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <label for="input06" class="col-sm-2 control-label">Line</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control underline-input" id="input06" placeholder="This is placeholder...">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Label not focus</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <label for="input07" class="col-sm-2 control-label">Disabled</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="input07" placeholder="This is disabled input..." disabled>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Static control</label>
                                            <div class="col-sm-10">
                                                <p class="form-control-static">email@example.com</p>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Checkboxes & radios</label>
                                            <div class="col-sm-10">

                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        Option one is this and that—be sure to include why it's great
                                                    </label>
                                                </div>
                                                <div class="checkbox disabled">
                                                    <label>
                                                        <input type="checkbox" value="" disabled>
                                                        Option two is disabled
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                                        Option one is this and that—be sure to include why it's great
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                        Option two can be something else and selecting it will deselect option one
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="line-dashed line-full"/>

                                        
                                        <hr class="line-dashed line-full"/>

                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-2">
                                                <button type="reset" class="btn btn-lightred">Cancel</button>
                                                <button type="submit" class="btn btn-default">Save changes</button>
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