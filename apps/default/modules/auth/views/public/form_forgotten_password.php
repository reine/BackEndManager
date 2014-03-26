    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><?php print $header?>
                    <small>&nbsp;</small>
                </h1>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <?php print form_open('auth/forgotten_password',array('class'=>'form-horizontal'))?>
                    <fieldset>

                        <div class="form-group">
                            <label for="email" class="col-lg-2 control-label"><?php print $this->lang->line('userlib_email')?></label>
                            <div class="col-lg-10">
                                <input type="text" name="email" id="email" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group submit">
                            <div class="col-lg-10 col-lg-offset-2">
                                <a href="<?php print site_url('auth/login') ?>" class="btn btn-default">
                                    <?php print $this->lang->line('general_cancel')?>
                                </a>

                                <button type="submit" class="btn btn-primary" name="submit" value="submit">
                                    <?php print $this->lang->line('userlib_reset_password')?>
                                </button>
                            </div>
                        </div>

                    </fieldset>
                <?php print form_close()?>
            </div>

        </div>

    </div>
    <!-- /.container -->
                