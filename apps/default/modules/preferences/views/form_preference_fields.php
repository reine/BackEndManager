<h2><?php print $header;?></h2>

<?php print form_open($form_link,array('class'=>'form-horizontal'));?>
<table id="preference_form">
	<?php foreach($field as $name => $data): ?>
	<tr>
	    <td class='label'>

	    <?php print form_label($data['label'],$name);?>
	    <?php
	    if (FALSE !== ($desc = $this->lang->line('preference_desc_'.$name)))
	    {
	        print "<small>".$desc."</small>";
	    }
	    ?>
	    </td>
	    <td><?php print $data['input'];?></td>
	</tr>
	<?php endforeach; ?>
</table>

<div class="buttons">
	<button type="submit" class="btn btn-default" name="submit" value="submit">
		<i class="fa fa-floppy-o"></i>
    	<?php print $this->lang->line('general_save');?>
    </button>

    <a href="<?php print site_url($cancel_link);?>" class="btn btn-default">
    	<i class="fa fa-times"></i>
    	<?php print $this->lang->line('general_cancel');?>
    </a>
</div>
<?php print form_close();?>