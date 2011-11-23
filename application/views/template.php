<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <title>Simpla Admin</title>

        <!--                       CSS                       -->

        <!-- Reset Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/simplaadmin/resources/css/reset.css" type="text/css" media="screen" />

        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/simplaadmin/resources/css/style.css" type="text/css" media="screen" />

        <!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>template/simplaadmin/resources/css/invalid.css" type="text/css" media="screen" />

        <!-- Colour Schemes

		Default colour scheme is green. Uncomment prefered stylesheet to use it.

		<link rel="stylesheet" href="resources/css/blue.css" type="text/css" media="screen" />

		<link rel="stylesheet" href="resources/css/red.css" type="text/css" media="screen" />

		-->

        <!-- Internet Explorer Fixes Stylesheet -->

        <!--[if lte IE 7]>
			<link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->

        <!--                       Javascripts                       -->

        <!-- jQuery -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/jquery-1.3.2.min.js"></script>

        <!-- jQuery Configuration -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/simpla.jquery.configuration.js"></script>

        <!-- Facebox jQuery Plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/facebox.js"></script>

        <!-- jQuery WYSIWYG Plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/jquery.wysiwyg.js"></script>

        <!-- jQuery Datepicker Plugin -->
        <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/jquery.datePicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/jquery.date.js"></script>
        <!--[if IE]><script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/jquery.bgiframe.js"></script><![endif]-->


        <!-- Internet Explorer .png-fix -->

        <!--[if IE 6]>
                <script type="text/javascript" src="<?php echo base_url(); ?>template/simplaadmin/resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
                <script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->

    </head>

    <body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

            <div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

                    <h1 id="sidebar-title"><a href="#">Taksi</a></h1>

                    <!-- Logo (221px wide) -->
                    <a href="#"><img id="logo" src="<?php echo base_url(); ?>template/simplaadmin/resources/images/logo.png" alt="Simpla Admin logo" /></a>

                    <!-- Sidebar Profile links -->
                    <div id="profile-links">
				
                        <br />
                        <a href="#" title="View the Site">View the Site</a> | <a href="<?php echo site_url("admin/logout"); ?>" title="Sign Out">Sign Out</a>
                    </div>

                    <ul id="main-nav">  <!-- Accordion Menu -->

                        <li>
                            <a href="<?php echo site_url("admin"); ?>" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
                            </a>
                        </li>
   <li>
                            <a href="<?php echo site_url("admin/pemesan"); ?>" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Pemesan
                            </a>
                        </li>
                      



                    </ul> <!-- End #main-nav -->


                </div></div> <!-- End #sidebar -->

            <div id="main-content"> 
                <!-- Main Content Section with everything -->
                <?php $notif = $this->session->flashdata("notif"); ?>
                <?php if (!empty($notif)) {
 ?>
                    <div class="notification information png_bg">    
                        <a href="#" class="close"><img src="<?php echo base_url();?>template/simplaadmin/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                        <div>    
    				<?php echo $notif;?>
                        </div>    
                    </div>    
                <?php } ?>
                <?php
                if (!empty($content)) {

                    $this->load->view($content);
                }
                ?>


            </div> <!-- End #main-content -->

        </div></body>

</html>
