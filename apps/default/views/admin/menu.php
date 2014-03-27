<!--
When creating a new menu item on the top-most level, please ensure that you assign the LI a unique ID.
-->
                <ul class="sidebar-menu" id="menu">

                    <?php
                        if (($this->uri->segment(1) == 'admin') && !$this->uri->segment(2)) {
                            $dashboardActiveLink = 'active';
                        } else {
                            $dashboardActiveLink = '';
                        }
                    ?>
                    <li id="menu_bep_home" class="<?php print $dashboardActiveLink; ?>">
                        <a href="<?php echo site_url('/admin'); ?>">
                            <i class="fa fa-dashboard"></i> <span><?php echo $this->lang->line('backendpro_dashboard'); ?></span>
                        </a>
                    </li>
    
                    <?php
                        if(check('System',NULL,FALSE)):
                            if  (
                                    (($this->uri->segment(1) == 'auth') && ($this->uri->segment(3) == 'members')) ||
                                    (($this->uri->segment(1) == 'auth') && ($this->uri->segment(3) == 'access_control')) ||
                                    (($this->uri->segment(1) == 'auth') && ($this->uri->segment(3) == 'acl_permissions')) ||
                                    (($this->uri->segment(1) == 'auth') && ($this->uri->segment(3) == 'acl_groups')) ||
                                    (($this->uri->segment(1) == 'auth') && ($this->uri->segment(3) == 'acl_resources')) ||
                                    (($this->uri->segment(1) == 'auth') && ($this->uri->segment(3) == 'acl_actions')) ||
                                    (($this->uri->segment(1) == 'admin') && ($this->uri->segment(2) == 'settings'))
                                ) {
                                $systemActiveLink = 'active';
                            } else {
                                $systemActiveLink = '';
                            }
                    ?>
                    <li class="treeview <?php print $systemActiveLink; ?>" id="menu_bep_system">
                        <a href="#">
                            <i class="fa fa-cogs"></i>
                            <span><?php print $this->lang->line('backendpro_system')?></span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php if(check('Members',NULL,FALSE)):?><li><?php print anchor('auth/admin/members', '<i class="fa fa-angle-double-right"></i> '.$this->lang->line('backendpro_members'))?></li><?php endif;?>
                            <?php if(check('Access Control',NULL,FALSE)):?><li><?php print anchor('auth/admin/access_control', '<i class="fa fa-angle-double-right"></i>'.$this->lang->line('backendpro_access_control'))?></li><?php endif;?>
                            <?php if(check('Settings',NULL,FALSE)):?><li><?php print anchor('admin/settings', '<i class="fa fa-angle-double-right"></i>'.$this->lang->line('backendpro_settings'))?></li><?php endif;?>
                        </ul>
                    </li>
                    <?php endif;?>
                </ul>
