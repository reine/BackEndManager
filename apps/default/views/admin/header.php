<!DOCTYPE html>
<html lang="en">
<head>
	<?php print $this->bep_site->get_metatags();?>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<title><?php print $header.' | '.$this->preference->item('site_name');?></title>
	<?php print $this->bep_site->get_variables();?>
	<?php print $this->bep_assets->get_header_assets();?>
	<?php print $this->bep_site->get_js_blocks();?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-flat">

    <header class="header">
        <a href="<?php echo site_url('/'); ?>" class="logo">
            <?php print $this->preference->item('site_name')?>
        </a>
        
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php print site_url('messages/admin/dashboard'); ?>"
                        data-toggle="tooltip" data-placement="bottom" title="<?php print $this->lang->line('apps_messages'); ?>">
                            <i class="ion ion-android-mail"></i>
                            <span class="label label-info">1</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php print site_url('tasks/admin/dashboard'); ?>"
                        data-toggle="tooltip" data-placement="bottom" title="<?php print $this->lang->line('apps_tasks'); ?>">
                            <i class="ion ion-android-clock"></i>
                            <span class="label label-warning">1</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php print site_url('calendar/admin/dashboard'); ?>"
                        data-toggle="tooltip" data-placement="bottom" title="<?php print $this->lang->line('apps_calendar'); ?>">
                            <i class="ion ion-android-calendar"></i>
                            <span class="label label-danger">1</span>
                        </a>
                    </li>   
                    <!-- User Account -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i><i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="<?php print base_url(); ?>images/avatar3.png" class="img-circle" alt="User Image" />
                                <p>
                                    Jane Doe - Administrator
                                    <small>Member since March 2014</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <?php print anchor('auth/logout',$this->lang->line('userlib_logout'),array('class'=>'btn btn-default btn-flat')); ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">                
            
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php print base_url(); ?>images/avatar3.png" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Jane Doe</p>
                        <a name="user-group">Administrator</a>
                        <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
                    </div>
                </div>

                <?php print $this->load->view($this->config->item('backendpro_template_admin') . 'menu');?>
                
            </section>
            <!-- /.sidebar -->
        </aside>
