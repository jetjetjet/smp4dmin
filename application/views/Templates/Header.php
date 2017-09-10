<!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">

                    <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="<?php echo site_url('Welcome'); ?>">
                            <span><strong>SMPN 2</strong> Sungai Penuh</span>
                        </a>
                        <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->
 
                    <!-- Left-side navigation -->
                    <ul class="nav-left pull-left list-unstyled list-inline">
                        <li class="sidebar-collapse divided-right">
                            <a role="button" tabindex="0" class="collapse-sidebar">
                                <i class="fa fa-outdent"></i>
                            </a>
                        </li>
                        
                    </ul>
                    <!-- Left-side navigation end -->
  
                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">
                       
 
                        <li class="dropdown nav-profile">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url();?>assets/images/profile-photo.jpg" alt="" class="img-circle size-30x30">
                                <span><?php echo ucwords(strtolower($this->session->userdata('nama'))); ; ?><i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                                <li>
                                    <a role="button" tabindex="0">
                                         
                                        <i class="fa fa-user"></i>Profile
                                    </a>
                                </li> 
                                <li>
                                    <a role="button" tabindex="0">
                                        <i class="fa fa-cog"></i>Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                 
                                <li>
                                    <a href="<?php echo site_url('Login/Logout'); ?>" role="button" tabindex="0">
                                        <i class="fa fa-sign-out"></i>Logout
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="toggle-right-sidebar">
                            <a role="button" tabindex="0">
                                <i class="fa fa-comments"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- Right-side navigation end -->



                </header>

            </section>
            <!--/ HEADER Content  -->