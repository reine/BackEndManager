    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><?php print $header?>
                    <small>For Account Access</small>
                </h1>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <?php print form_open('auth/login',array('class'=>'form-horizontal'))?>
                    <fieldset>

                        <div class="form-group">
                            <label for="login_field" class="col-lg-2 control-label"><?php print $login_field?></label>
                            <div class="col-lg-10">
                                <input type="text" name="login_field" id="login_field" class="form-control" value="<?php print set_value("login_field")?>" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-lg-2 control-label"><?php print $this->lang->line('userlib_password')?></label>
                            <div class="col-lg-10">
                                <input type="password" name="password" id="password" class="form-control" />
                                <div class="checkbox">
                                    <label for="remember">
                                        <?php print form_checkbox('remember','yes',$this->input->post('remember'))?>
                                        <?php print $this->lang->line('userlib_remember_me')?>?
                                    </label>
                                </div>
                            </div>
                        </div>

                        <?php
                        // Only display captcha if needed
                        if($this->preference->item('use_login_captcha')):?>
                        <div class="form-group captcha">
                            <label for="recaptcha_response_field" class="col-lg-2 control-label"><?php print $this->lang->line('userlib_captcha')?></label>
                            <div class="col-lg-10">
                                <?php print $captcha?>
                            </div>
                        </div>
                        <?php endif;?>

                        <div class="form-group submit">
                            <div class="col-lg-10 col-lg-offset-2">
                                <a href="<?php print site_url('/') ?>" class="btn btn-default">
                                    <?php print $this->lang->line('general_cancel')?>
                                </a>

                                <button type="submit" class="btn btn-primary" name="submit" value="submit">
                                    <?php print $this->lang->line('userlib_login')?>
                                </button>

                                <a href="<?php print site_url('auth/forgotten_password') ?>" class="btn btn-info">
                                    <?php print $this->lang->line('userlib_forgotten_password')?>
                                </a>

                                <?php if($this->preference->item('allow_user_registration')):?>
                                <a href="<?php print site_url('auth/register') ?>" class="btn btn-info">
                                    <?php print $this->lang->line('userlib_register')?>
                                </a>
                                <?php endif;?>
                            </div>
                        </div>

                    </fieldset>
                <?php print form_close()?>
            </div>

        </div>

    </div>
    <!-- /.container -->
                