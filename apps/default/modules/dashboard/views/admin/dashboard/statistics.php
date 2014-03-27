<div class="small-box bg-wisteria">
    <div class="inner">
        <h3><?php print $total_members ?></h3>
        <p><?php print $this->lang->line('dashboard_statistics_total_members') ?></p>
    </div>
    <div class="icon">
        <i class="ion ion-ios7-people"></i>
    </div>
    <div class="small-box-footer">
        <?php print $this->lang->line('dashboard_statistics_total_unactivated_members') ?> &nbsp;
        <strong><?php print $total_unactivated_members ?></strong> &nbsp; &bullet; &nbsp;
        <?php print $this->lang->line('dashboard_statistics_user_registration') ?> &nbsp;
        <strong><?php print $user_registration ?></strong>
    </div>
</div>


<div class="small-box bg-nephritis">
    <div class="inner">
        <h3><?php print phpversion();?></h3>
        <p><?php print $this->lang->line('dashboard_statistics_php_version') ?></p>
    </div>
    <div class="icon">
        <i class="ion ion-ios7-cog-outline"></i>
    </div>
    <div class="small-box-footer">
        <?php print $this->lang->line('dashboard_statistics_ci_version') ?> &nbsp;
        <strong><?php print CI_VERSION ?></strong> &nbsp; &bullet; &nbsp;
        <?php print $this->lang->line('dashboard_statistics_bep_version') ?> &nbsp;
        <strong><?php print BEP_VERSION ?></strong>
    </div>
</div>