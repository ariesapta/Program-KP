<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="bootstrap material admin template">
	<meta name="author" content="">

	<title>SMSK&D DK-3</title>

	<link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/site.min.css">
    
    <!-- Plugins -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/global/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/flag-icon-css/flag-icon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/waves/waves.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/examples/css/tables/datatable.css">
    
    
    <!-- Fonts -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/fonts/material-design/material-design.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/global/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
	
	<?php foreach($css as $f):?>
        <link rel="stylesheet" href="<?php echo $f;?>">
    <?php endforeach; ?>
    
    <script src="<?php echo base_url() ?>assets/global/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/global/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
</head>
<body class="animsition">
	<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
			data-toggle="menubar">
			<span class="sr-only">Toggle navigation</span>
			<span class="hamburger-bar"></span></button>
			<button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
			data-toggle="collapse">
			<i class="icon md-more" aria-hidden="true"></i></button>
			<div class="navbar-brand navbar-brand-center" data-toggle="gridmenu">
				<img class="navbar-brand-logo" src="<?php echo base_url() ?>assets/images/logo-dkp3.png" title="Remark">
				<span class="navbar-brand-text hidden-xs-down"> SMSK&D DK-3</span>
			</div>
			<button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
			data-toggle="collapse">
			<span class="sr-only">Toggle Search</span>
			<i class="icon md-search" aria-hidden="true"></i></button>
		</div>

		<div class="navbar-container container-fluid">
			<!-- Navbar Collapse -->
			<div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
				<!-- Navbar Toolbar -->
				<ul class="nav navbar-toolbar">
					<li class="nav-item hidden-float" id="toggleMenubar">
						<a class="nav-link" data-toggle="menubar" href="#" role="button">
							<i class="icon hamburger hamburger-arrow-left">
								<span class="sr-only">Toggle menubar</span>
								<span class="hamburger-bar"></span>
							</i>
						</a>
					</li>
				</ul>
				<!-- End Navbar Toolbar -->

				<!-- Navbar Toolbar Right -->
				<ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

					<li class="nav-item">
						<label class="nav-link navbar-avatar">
							<span class="avatar avatar-online">
								<img src="<?php echo base_url() ?>assets/global/portraits/5.jpg" alt="...">
							</span>
						</label>
					</li>
					<li class="nav-item">
						<label class="nav-link waves-effect waves-light waves-round">Muhamamad Bawaihi</label>		
					</li>
				</ul>
				<!-- End Navbar Toolbar Right -->
			</div>
			<!-- End Navbar Collapse -->
		</div>
	</nav>
	<div class="site-menubar">
		<div class="site-menubar-body">
			<div>
				<div>
					<?php
					$this->load->view('template/_menu_admin');

					?>
				</div>
			</div>
		</div>
	</div>

<!-- Page -->
<div class="page">
	<?php echo $content; ?>
</div>
	
	<!-- Footer -->
	<footer class="site-footer">
		<div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">W A I - PINKYBEAR</a></div>
		<div class="site-footer-right">
			Crafted with <i class="red-600 icon md-favorite"></i> by <a href="#">Bootstrap Themes</a>
		</div>
	</footer>
	<!-- Core  -->
    <script src="<?php echo base_url() ?>assets/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="<?php echo base_url() ?>assets/global/vendor/popper-js/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/global/vendor/bootstrap/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/global/vendor/animsition/animsition.js"></script>
    <script src="<?php echo base_url() ?>assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url() ?>assets/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="<?php echo base_url() ?>assets/global/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="<?php echo base_url() ?>assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    <script src="<?php echo base_url() ?>assets/global/vendor/waves/waves.js"></script>
    
    <!-- Plugins -->
    <script src="<?php echo base_url() ?>assets/global/vendor/switchery/switchery.js"></script>
    <script src="<?php echo base_url() ?>assets/global/vendor/intro-js/intro.js"></script>
    <script src="<?php echo base_url() ?>assets/global/vendor/screenfull/screenfull.js"></script>
    <script src="<?php echo base_url() ?>assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net/jquery.dataTables.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-buttons/buttons.html5.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-buttons/buttons.flash.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-buttons/buttons.print.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/asrange/jquery-asRange.min.js"></script>
        <script src="<?php echo base_url() ?>assets/global/vendor/bootbox/bootbox.js"></script>
    
    <!-- Scripts -->
    <script src="<?php echo base_url() ?>assets/global/js/Component.js"></script>
    <script src="<?php echo base_url() ?>assets/global/js/Plugin.js"></script>
    <script src="<?php echo base_url() ?>assets/global/js/Base.js"></script>
    <script src="<?php echo base_url() ?>assets/global/js/Config.js"></script>
    
    <script src="<?php echo base_url() ?>assets/js/Section/Menubar.js"></script>
    <script src="<?php echo base_url() ?>assets/js/Section/GridMenu.js"></script>
    <script src="<?php echo base_url() ?>assets/js/Section/Sidebar.js"></script>
    <script src="<?php echo base_url() ?>assets/js/Section/PageAside.js"></script>
    <script src="<?php echo base_url() ?>assets/js/Plugin/menu.js"></script>
    
    <script src="<?php echo base_url() ?>assets/global/js/config/colors.js"></script>
    <script src="<?php echo base_url() ?>assets/js/config/tour.js"></script>
    <script>Config.set('assets', '<?php echo base_url() ?>assets');</script>
    
    <!-- Page -->
    <script src="<?php echo base_url() ?>assets/js/Site.js"></script>
    <script src="<?php echo base_url() ?>assets/global/js/Plugin/asscrollable.js"></script>
    <script src="<?php echo base_url() ?>assets/global/js/Plugin/slidepanel.js"></script>
    <script src="<?php echo base_url() ?>assets/global/js/Plugin/switchery.js"></script>
        <script src="<?php echo base_url() ?>assets/global/js/Plugin/datatables.js"></script>
    
        <script src="<?php echo base_url() ?>assets/examples/js/tables/datatable.js"></script>
        <script src="<?php echo base_url() ?>assets/examples/js/uikit/icon.js"></script>
	
	<?php foreach($js as $f):?>
	    <script src="<?php echo $f;?>"></script>
	<?php endforeach; ?>

</body>
</html>
