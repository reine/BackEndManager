<table id="access_control_menu" cellspacing="0">
<tr>
    <td class="icons"><i class="ion ion-ios7-locked"></i></td>
    <td>
        <h3><?php print anchor('auth/admin/acl_permissions',$this->lang->line('access_permissions'))?></h3>
        <p><?php print $this->lang->line('access_permissions_desc')?></p>
    </td>
    
    <td class="icons"><i class="ion ion-ios7-people"></i></td>
    <td>
        <h3><?php print anchor('auth/admin/acl_groups',$this->lang->line('access_groups'))?></h3>
        <p><?php print $this->lang->line('access_groups_desc')?></p>
    </td>
</tr>

<tr>
    <td class="icons"><i class="ion ion-ios7-folder"></i></td>
    <td>
        <h3><?php print anchor('auth/admin/acl_resources',$this->lang->line('access_resources'))?></h3>
        <p><?php print $this->lang->line('access_resources_desc')?></p>
    </td>
    
    <td class="icons"><i class="ion ion-ios7-thunderstorm"></i></td>
    <td>
        <h3><?php print anchor('auth/admin/acl_actions',$this->lang->line('access_actions'))?></h3>
        <p><?php print $this->lang->line('access_actions_desc')?></p>
    </td>
</tr>
</table>