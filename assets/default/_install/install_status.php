<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Installation Status</title>
    <link href="../css/bootstrap_3.1.1/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap_themes/flatly/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="wrapper">
	    <a name="top"></a>
	    <div id="header">
	        <h1>BackendPro Installation Process</h1>
	    </div>

	    <div id="content">
	        <a name="top"></a>
		    <?php include_once("RUN.php");?>

		    <h2>
		    <?php
		    	// Output the overall install status
		    	if ($install_status)
		    		print "<font color='green'>BackendPro Install was Successful</font>";
		    	else
		    		print "<font color='red'>BackendPro Install was Unsuccessful</font>";
		    ?>
		    </h2>

		    <ul class="results">
		    <?php
		    	foreach($features as $feature)
		    	{
		    		$fe_status = ($feature->status) ? "done" : "fail";
		    		print "<li class='fa " . $fe_status . "' style='width: 100%;'>" . $feature->name;
		    		print "<ul>";
		    		foreach($feature->components as $component)
		    		{
		    			$cp_status = ($component->status) ? "done" : "fail";
		    			$cp_error = ($component->error != NULL) ? " - <b>" . $component->error . "</b>" : "";
		    			print "<li class='" . $cp_status . "'>" . $component->name . $cp_error . "</li>";
		    		}
		    		print "</ul><br /></li>";
		    	}
		    ?>
		    </ul>

		    <?php if($install_status):?>
		    <p>Your system has been fully setup, please delete the <b>/install</b> directory
	    	otherwise other people will be able to reset your system setup.</p>

	    	<p>You may now use the system, <a href="../index.php">click here</a> to do so.</p>
	    	<p>A <a href="install.log">log file</a> has been created with detailed
	    	information about the install</p>
		    <?php else:?>
		    <p>An error has occured during the installation of BackendPro. Please check the
		    details above to fix the problem before trying to install again. A
		    <a href="install.log">log file</a> has been created which more in depth
		    details about what went wrong.
		    <?php endif;?>
	    </div>

	    <div id="footer">
	    	<br /><br />
	        <a href="#top">Top</a><br />
	        This site is powered by BackendPro 0.6<br />
	        &copy; Copyright 2009 - Adam Price -  All rights Reserved
	    </div>
	</div>
</body>
</html>