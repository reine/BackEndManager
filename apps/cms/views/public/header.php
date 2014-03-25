<!DOCTYPE html>
<html lang="en">
<head>
	<?php print $this->bep_site->get_metatags(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php print $header.' | '.$this->preference->item('site_name')?></title>
	<?php print $this->bep_site->get_variables()?>
	<?php print $this->bep_assets->get_header_assets();?>
	<?php print $this->bep_site->get_js_blocks()?>
</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('/'); ?>"><?php print $this->preference->item('site_name')?></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Links <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://github.com/reine/BackEndManager" target="_blank">GitHub</a></li>
                            <li><a href="http://ellislab.com/codeigniter" target="_blank">CodeIgniter</a></li>
                            <li><a href="http://getbootstrap.com" target="_blank">Bootstrap</a></li>
                            <li><a href="http://bootswatch.com" target="_blank">Bootswatch</a></li>
                            <li><a href="http://startbootstrap.com" target="_blank">Start Bootstrap</a></li>
                        </ul>
                    </li>
                    <?php
                    // Show 'control panel' link if logged-in user have admin rights
                    if ( check('Control Panel',NULL,FALSE) )
                        print '<li>'.anchor('/admin',$this->lang->line('backendpro_control_panel')).'</li>';
                    ?>
                    <li>
                    <?php
					    if(is_user())
					    	print anchor('auth/logout',$this->lang->line('userlib_logout'));
					    else
					    	print anchor('auth/login',$this->lang->line('userlib_login'));
					?>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
