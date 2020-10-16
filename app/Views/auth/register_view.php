<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="bg-primary">
                <div class="login-logo">
                    Register new user
                </div>
                <!-- /.login-logo -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Create new user on the system</p>
                        <form action="<?=base_url()?>/Auth/Register" method="post">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Salutation">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Email">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder="Create Password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Confirn Password">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-4 offset-8">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>

                        <p class="mb-1">
                            <a href="<?=base_url()?>/Auth" class="text-center">Login</a>
                        </p>
                        <p class="mb-0">
                            <a href="<?=base_url()?>/Auth/ForgotPasswordView">Forgot password</a>
                        </p>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
            <!-- /.login-box -->
        </div>
    </div>
</div>
