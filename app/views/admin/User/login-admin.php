<div class="login-box">
    <div class="login-logo">
        <b>Admin</b>Garant
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Будь ласка авторизуйтесь</p>
            <?php if (isset($_SESSION['error'])):?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Увага!</h5>
                    <?=$_SESSION['error']; unset($_SESSION['error']);?>
                </div>
            <?php endif;?>
            <form action="<?=ADMIN;?>/user/login-admin" method="post">
                <div class="input-group mb-3">
                    <input name="login" type="text" class="form-control" placeholder="Логін">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Пароль">
                    <label title="Защищенное соединение" class="login-ssl-block" style="display: none;">
                        <input class="login-ssl" type="checkbox" tabindex="3" checked="">SSL
                    </label>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Увійти</button>
                    </div> <!-- /.col -->
                </div>
            </form>
        </div>
    </div> <!-- /.login-card-body -->
</div> <!-- /.login-box -->