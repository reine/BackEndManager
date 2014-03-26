    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><?php print $header?>
                    <small>To Access Restricted Content</small>
                </h1>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <?php print form_open('auth/register',array('class'=>'form-horizontal'))?>
                    <fieldset>

                        <div class="form-group">
                            <label for="username" class="col-lg-2 control-label"><?php print $this->lang->line('userlib_username')?></label>
                            <div class="col-lg-10">
                                <input type="text" name="username" id="username" size="32" class="form-control" value="<?php print set_value('username')?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-lg-2 control-label"><?php print $this->lang->line('userlib_email')?></label>
                            <div class="col-lg-10">
                                <input type="text" name="email" id="email" class="form-control"  value="<?php print set_value('email')?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-lg-2 control-label"><?php print $this->lang->line('userlib_password')?></label>
                            <div class="col-lg-10">
                                <input type="password" name="password" id="password" size="32" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password" class="col-lg-2 control-label"><?php print $this->lang->line('userlib_confirm_password')?></label>
                            <div class="col-lg-10">
                                <input type="password" name="confirm_password" id="confirm_password" size="32" class="form-control" />
                            </div>
                        </div>

                        <?php
                        // Only display captcha if needed
                        if($this->preference->item('use_registration_captcha')):?>
                        <div class="form-group captcha">
                            <label for="recaptcha_response_field" class="col-lg-2 control-label"><?php print $this->lang->line('userlib_captcha')?></label>
                            <div class="col-lg-10">
                                <?php print $captcha?>
                            </div>
                        </div>
                        <?php endif;?>

                        <div class="form-group submit">
                            <div class="col-lg-10 col-lg-offset-2">
                                <a href="<?php print site_url('auth/login') ?>" class="btn btn-default">
                                    <?php print $this->lang->line('general_cancel')?>
                                </a>

                                <button type="submit" class="btn btn-primary" name="submit" value="submit">
                                    <?php print $this->lang->line('userlib_register')?>
                                </button>
                            </div>
                        </div>

                    </fieldset>
                <?php print form_close()?>
            </div>

        </div>

    </div>
    <!-- /.container -->
                