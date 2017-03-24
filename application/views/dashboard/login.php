<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-green">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open(base_url('dashboard/login/check_login')); ?>
                            <fieldset>
                                <div class="form-group">
                                <label>Username</label>
                                <?php echo form_error('username'); ?>
                                    <input class="form-control" name="username" type="text" value="<?php echo set_value('username'); ?>">
                                </div>
                                <label>password</label>
                                <?php echo form_error('password'); ?>
                                <div class="form-group">
                                    <input class="form-control" name="password" type="password">
                                </div>
                                    <p class="text-info"><a href="#">I forgot my password</a></p>
                                <input type="submit" name="submit" value="Login" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>