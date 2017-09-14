<!doctype html>
<!--[if lt IE 2]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 2]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="2-UA-Compatible" content="IE=edge,chrome=1">
        <title>Admin SMP XX</title>
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
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/morris/morris.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/rickshaw/rickshaw.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/datatables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/datatables/datatables.bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/chosen/chosen.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/summernote/summernote.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/vendor/sweetalert/dist/sweetalert.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
        <!--/ stylesheets -->
		
		
		<!--/ SweetAlert -->


        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="<?php echo base_url();?>assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->




    </head>





    <body id="minovate" class="appWrapper">






        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->












        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">
			<?php echo $header;?>





            





            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">
				<?php echo $sidebar;?>




                





                




            </div>
            <!--/ CONTROLS Content -->
				<?php echo $content;?>



            






        </div>
        <!--/ Application Content -->











		


        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url();?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/d3/d3.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/d3/d3.layout.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/rickshaw/rickshaw.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/flot-spline/jquery.flot.spline.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/morris/morris.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/summernote/summernote.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/coolclock/coolclock.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/coolclock/excanvas.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
        <script src="<?=base_url();?>assets/js/vendor/sweetalert/dist/sweetalert.min.js"></script>
        <!--/ custom javascripts -->




	<!-- panggil ckeditor.js -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
	<!-- panggil adapter jquery ckeditor -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/adapters/jquery.js"></script>
	<!-- setup selector -->
	<script type="text/javascript">
		$('textarea.texteditor').ckeditor();
	</script>



        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <!--/ Page Specific Scripts -->






        <!-- Google Analytics: change UA-XXXXX-2 to be your site's ID. -->
         <script>
            // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            // e.src='https://www.google-analytics.com/analytics.js';
            // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            // ga('create','UA-XXXXX-2','auto');ga('send','pageview');
        // </script>

    </body>
</html>
