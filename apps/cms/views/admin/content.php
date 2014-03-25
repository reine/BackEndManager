        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">                
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <a name="top"></a>
                <h1>
                    <?php print $header ?>
                    <small><?php print $this->lang->line('backendpro_control_panel') ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('/admin'); ?>"><i class="fa fa-dashboard"></i></a></li>
                    <?php print $this->bep_site->get_breadcrumb();?>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-solid">
                            <div class="box-body">
                                <!-- start content -->

                                <?php
                                print displayStatus();
                                print (isset($content)) ? $content : NULL;
                                
                                if( isset($page)){
                                    if( isset($module)){
                                        $this->load->view($module."/".$page);
                                    } else {
                                        $this->load->view($page);
                                    }
                                }
                                ?>
                                
                                <!-- end content -->
                            </div>
                        </div>
                    </div>
                </div>             
                <br style="clear: both" />

            </section><!-- /.content -->
