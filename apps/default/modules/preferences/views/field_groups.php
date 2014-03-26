<ul id="preference_list">
<?php
    foreach($group as $key=>$value)
    {
        print '<li><i class="fa fa-cog"></i> ' . anchor($form_link . '/' . $key,$value['name']) . '</li>';
    }
?>
	<li><i class="fa fa-cog"></i> <?php print anchor('/admin/settings/php_info', $this->lang->line('misc_phpinfo')); ?></li>
</ul>