<div class="box-table-header">
    <div class="box-actions">                
        <a href="<?php print  site_url('auth/admin/members/form')?>" class="btn btn-sm btn-flat">
            <i class="fa fa-plus-circle"></i>
            <?php print $this->lang->line('userlib_create_user')?>
        </a>
    </div>

    <div class="box-tools">
        <div class="input-group">
            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="username or email"/>
            <div class="input-group-btn">
                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
</div><!-- .box-table-header -->

<?php print form_open('auth/admin/members/delete')?>
<table class="table table-condensed table-hover" cellspacing="0">
    <thead>
        <tr>
            <th><?php print $this->lang->line('userlib_username')?></th>
            <th><?php print $this->lang->line('userlib_email')?></th>
            <th><?php print $this->lang->line('userlib_group')?></th>
            <th><?php print $this->lang->line('userlib_last_visit')?></th>
            <th width=5% class="middle"><?php print $this->lang->line('userlib_active')?></th>
            <th width=10% class="middle"><?php print form_checkbox('all','select',FALSE)?> <i class="fa fa-trash-o" title="<?php print $this->lang->line('general_delete')?>"></i></th>        
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan=5>&nbsp;</td>
            <td class="middle"><?php print form_submit('delete',$this->lang->line('general_delete'),'onClick="return confirm(\''.$this->lang->line('userlib_delete_user_confirm').'\');" class="btn btn-sm bg-box-action btn-flat"')?></td>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach($members->result_array() as $row):
            // Check if this user account belongs to the person logged in
            // if so don't allow them to delete it, also if it belongs to the main
            // admin user don't allow them to delete it
            $delete  = ($row['id'] == $this->session->userdata('id') || $row['id'] == 1) ? '&nbsp;' : form_checkbox('select[]',$row['id'],FALSE);  
			
			$active =  ($row['active']?'<span class="label label-success">Yes</span>':'<span class="label label-danger">No</span>');   
        ?>
        <tr>
            <td><a href="<?php print site_url('auth/admin/members/form/'.$row['id'])?>"><?php print $row['username']?></a></td>
            <td><?php print $row['email']?></td>
            <td><?php print $row['group']?></td>
            <td><?php print $row['last_visit']?></td>
            <td class="middle"><?php print $active;?></td>
            <td class="middle"><?php print $delete?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php print form_close()?>