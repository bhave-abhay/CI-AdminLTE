<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="bg-primary">
                <div class="login-logo">
                   Forgot password?
                </div>
                <!-- /.login-logo -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">
                            Recover an account with lost password.
                            We will send an email with a link to reset your password.
                            Please note that this link will be valid only for 24 hours.
                        </p>

                        <form action="<?=base_url()?>/Auth/ForgotPassword" method="post">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 offset-8">
                                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>

                        <p class="mb-1">
                            <a href="<?=base_url()?>/Auth">Login</a>
                        </p>
                        <p class="mb-0">
                            <a href="<?=base_url()?>/Auth/RegisterView" class="text-center">Register</a>
                        </p>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
            <!-- /.login-box -->
        </div>
    </div>
</div>
