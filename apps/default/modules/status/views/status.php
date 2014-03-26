<div class="alert alert-<?php print $type; ?>">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <h4><?php print $this->lang->line('status_type_' . $type);?></h4>
    <?php print ul($messages); ?>
</div>
