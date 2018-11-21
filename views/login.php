<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bulma.css" />
<section class="hero is-fullheight" style="background-color: #475d82">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-white">Login</h3>
                    <p class="subtitle has-text-grey-lighter">Please login to proceed.</p>
                    <div class="box">
                        <!-- <form> -->
                        <?php echo form_open("auth/login");?>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-rounded is-medium" type="email" placeholder="Your Email" autofocus="" name="identity">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-rounded is-medium" type="password" placeholder="Your Password" name="password">
                                </div>
                            </div>
                            <div class="field">
                                <label class="checkbox">
                  <input type="checkbox" name="remember">
                  Remember me
                </label>
                            </div>
                            <button type="submit" class="button is-rounded is-block is-info is-medium is-fullwidth">Login</button>
                        <!-- </form> -->
                        <?php echo form_close(); ?>
                    </div>
                    <p class="has-text-white">
                        <a class="has-text-light" href="../">Sign Up</a> &nbsp;·&nbsp;
                        <a class="has-text-light" href="forgot_password">Forgot Password</a> &nbsp;·&nbsp;
                        <a class="has-text-light" href="../">Need Help?</a>
                    </p>
                </div>
            </div>
        </div>
    </section>