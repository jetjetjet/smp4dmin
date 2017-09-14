<!doctype html>
<!--[if lt IE 2]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 2]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="2-UA-Compatible" content="IE=edge,chrome=1">
        <title>Admin SMP 2 Sungai Penuh</title>
        <link rel="icon" type="image/ico" href="<?php echo base_url();?>assets/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/animate.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/animsition/css/animsition.min.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/vendor/sweetalert/dist/sweetalert.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="<?php echo base_url();?>assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->
   </head>
   <body id="minovate" class="appWrapper">
 <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">




            <div class="page page-core page-login">

                <div class="text-center"><h3 class="text-light text-white"><span class="text-lightred">Admin </span>SMPN 2 Sungai Penuh</h3></div>

                <div class="container w-420 p-15 bg-white mt-40 text-center">


                    <h2 class="text-light text-greensea">Log In</h2>
        <form class="form-signin" action="<?php echo site_url('Login/Validasi'); ?>" name="login" method="POST">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

            <h2 class="form-signin-heading"></h2>
                <div class="login-wrap">
					<?php echo form_error('g-recaptcha-response'); ?>				
                    <div class="form-group">
					<input id="email" type="text" class="form-control underline-input" name="email" value="<?php echo $this->session->flashdata('email') ?>" placeholder="Username Anda" autofocus>
                    <?php echo form_error('email', '<div class="form-group has-error"><p class="help-block">','</p></div>'); ?>
                    </div>
					<div class="form-group">
					<input type="password" class="form-control underline-input" placeholder="Password Anda" name="password" autocomplete="off">
                    <?php echo form_error('password', '<div class="form-group has-error"><p class="help-block">','</p></div>'); ?>
					</div>
					<hr class="b-3x">
					<div class="recaptcha">
					  <?php echo $recaptcha_html;?>
					  
					</div>
					<hr class="b-3x">
					<?php 
						if ($this->session->flashdata('notification')) { 
						?>
							
								<div class="alert alert-big alert-lightred alert-dismissable fade in">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<?php echo $this->session->flashdata('notification'); ?>
							   </div>	            
							
						<?php 
						} 
					?> 
					<div class="bg-slategray lt wrap-reset mt-40">
                        <p class="m-0">
                            <button href="signup.html" type="submit" class="btn btn-greensea b-0 br-2 mr-5">Login</button>
                        </p>
                    </div>
        	   </div>            
        </form>
            
         
    </div>

            </div>



			
			
        </div>
        <!--/ Application Content -->
	<?php
          if ($this->session->flashdata('pesan') <> '') {
        ?>
            <div class="alert alert-dismissible alert-danger">
              <?php echo $this->session->flashdata('pesan');  ?>
            </div>

        <?php  
          }
        ?>













        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url();?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/screenfull/screenfull.min.js"></script>
        <script src="<?=base_url();?>assets/js/vendor/sweetalert/dist/sweetalert.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
        <!--/ custom javascripts -->






        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){


            });
        </script>

        <script type="text/javascript"> 
            // $('#login').on("click", function(e) {
            //     e.preventDefault();
            //     var url = $(this).attr('href');
            //     console.log(url)
            //     swal({
            //         title: "Está seguro?",
            //         text: "No podrá recuperar el cliente una vez sea eliminado!",
            //         type: "warning",
            //         showCancelButton: true,
            //         confirmButtonColor: '#DD6B55',
            //         confirmButtonText: 'Si, Eliminarlo!',
            //         cancelButtonText: "No, Cancelar!",
            //         confirmButtonClass: "btn-danger",
            //         closeOnConfirm: false,
            //         closeOnCancel: false
            //     },
            //     function(isConfirm) {
            //         if (isConfirm) {
            //             swal("Eliminado!", "Su cliente ha sido eliminado!", "success");
            //             window.location.replace(url);
            //         } else {
            //             swal("Cancelado", "Su cliente está a salvo! :)", "error");
            //         }
            //     });
            // });
        </script>
        <!--/ Page Specific Scripts -->

 

    </body>
</html>
