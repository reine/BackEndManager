<?php print $dashboard ?>

<div class="buttons" style="clear: both">
	<a href="javascript:void(0);" id="edit_dashboard" class="btn btn-default">
		<i class="fa fa-pencil"></i>
		<?php print $this->lang->line('general_edit') ?> <?php print $this->lang->line('backendpro_dashboard') ?>
	</a>
	
	<a href="javascript:void(0);" id="save_dashboard" class="btn btn-default">
		<i class="fa fa-floppy-o"></i>
		<?php print $this->lang->line('general_save') ?>
	</a>

	<a href="<?php print site_url('/admin'); ?>" id="cancel_dashboard" class="btn btn-default" style="display: none;">
		<i class="fa fa-times"></i>
		<?php print $this->lang->line('general_cancel') ?>
	</a>
</div>