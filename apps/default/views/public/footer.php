	<div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>
                    	&copy;2013-<?php echo date('Y'); ?>
                    	<?php print $this->preference->item('site_name')?> &bullet;
                    	<a href="#top"><?php print $this->lang->line('general_top')?></a>
                    </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

	<?php print $this->bep_assets->get_footer_assets();?>
</body>
</html>