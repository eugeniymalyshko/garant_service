<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Новий звіт</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Головна</a></li>
                    <li class="breadcrumb-item active"><a href="<?=ADMIN;?>/reports">Перелік звітів</a></li>
                    <li class="breadcrumb-item active">Новий звіт</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div><!-- /.content-header -->
<!-- Content Header (Page header) -->
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
            <div class="box ">
                <?php if(isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Повідомлення</h5>
                    <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            </div>
            <?php endif;?>
            <?php if(isset($_SESSION['success'])) : ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Повідомлення</h5>
                    <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                </div>
            <?php endif;?>
                <form action="<?=ADMIN;?>/reports/add" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text" name="title" class="form-control" id="title" required  oninvalid="this.setCustomValidity('Поле Заголовок є обов\'язковим для заповнення')" oninput="setCustomValidity('')" placeholder="Заголовок" value="<?php isset($_SESSION['form_data']['title']) ? h($_SESSION['form_data']['title']) : null ;?>">
                        </div>
                        <div class="form-group">
                            <label for="link">Посилання</label>
                            <input type="text" name="link" class="form-control" id="alias" required oninvalid="this.setCustomValidity('Поле Посилання є обов\'язковим для заповнення')" oninput="setCustomValidity('')" placeholder="Посилання"   value="<?php isset($_SESSION['form_data']['link']) ? h($_SESSION['form_data']['link']) : null ;?>">
                        </div>
                        <div class="form-group">
                            <label for="year">Рік</label>
                            <input type="text" name="year" class="form-control" id="year" required oninvalid="this.setCustomValidity('Поле Рік є обов\'язковим для заповнення')" oninput="setCustomValidity('')" placeholder="Рік" value="<?php isset($_SESSION['form_data']['year']) ? h($_SESSION['form_data']['year']) : null ;?>">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Додати</button>
                    </div>
                </form>
                <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']);?>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->