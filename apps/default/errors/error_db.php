<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database Error</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	.error-page { width: 100%; }
    </style>
</head>
<body class="skin-black">
	<div class="wrapper row-offcanvas row-offcanvas-left">
		<!-- Content Header (Page header) -->
	    <section class="content-header">
	        <h1><?php echo $heading; ?></h1>
	    </section>

	    <!-- Main content -->
	    <section class="content">
	        <div class="error-page">
	            <h2 class="headline"></h2>
	            <div class="error-content">
	                <h3><i class="fa fa-warning text-yellow"></i> Oops! Something went wrong.</h3>
	                <blockquote>
	                	<?php echo $message; ?>
	                </blockquote>
	                <p>
	                    We will work on fixing that right away.<br />
	                    Meanwhile, you may <a href="<?php print site_url('/'); ?>">return to the home page</a>.
	                </p>
	            </div>
	        </div><!-- /.error-page -->
	    </section><!-- /.content -->
	</div>
</body>
</html>