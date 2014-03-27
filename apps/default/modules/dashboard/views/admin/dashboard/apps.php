<div align="center">
    <a class="btn btn-app" href="<?php print site_url('messages/admin/dashboard'); ?>">
        <?php print $this->bep_assets->icon('mail'); ?><br />
        <?php print $this->lang->line('dashboard_apps_messages'); ?>
    </a>

    <a class="btn btn-app" href="<?php print site_url('tasks/admin/dashboard'); ?>">
    <?php print $this->bep_assets->icon('clock'); ?><br />
        <?php print $this->lang->line('dashboard_apps_tasks'); ?>
    </a>

    <a class="btn btn-app" href="<?php print site_url('calendar/admin/dashboard'); ?>">
        <?php print $this->bep_assets->icon('calendar'); ?><br />
        <?php print $this->lang->line('dashboard_apps_calendar'); ?>
    </a>

    <a class="btn btn-app" href="<?php print site_url('contacts/admin/dashboard'); ?>">
        <?php print $this->bep_assets->icon('contacts'); ?><br />
        <?php print $this->lang->line('dashboard_apps_contacts'); ?>
    </a>

    <a class="btn btn-app" href="<?php print site_url('cms/admin/dashboard'); ?>">
        <?php print $this->bep_assets->icon('browser'); ?><br />
        <?php print $this->lang->line('dashboard_apps_content'); ?>
    </a>

    <a class="btn btn-app" href="<?php print site_url('dropbox/admin/dashboard'); ?>">
        <i class="fa fa-dropbox"></i> <?php print $this->lang->line('dashboard_apps_dropbox'); ?>
    </a>

    <a class="btn btn-app" href="<?php print site_url('elearn/admin/dashboard'); ?>">
        <?php print $this->bep_assets->icon('bookshelf'); ?><br />
        <?php print $this->lang->line('dashboard_apps_elearn'); ?>
    </a>

    <a class="btn btn-app" href="<?php print site_url('videos/admin/dashboard'); ?>">
        <?php print $this->bep_assets->icon('video'); ?><br />
        <?php print $this->lang->line('dashboard_apps_videos'); ?>
    </a>

    <a class="btn btn-app" href="<?php print site_url('games/admin/dashboard'); ?>">
        <?php print $this->bep_assets->icon('gamecontroller','Games'); ?><br />
        <?php print $this->lang->line('dashboard_apps_games'); ?>
    </a>
</div>