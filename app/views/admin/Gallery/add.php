<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Нове(ові) зображення</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Головна</a></li>
                    <li class="breadcrumb-item active"><a href="<?=ADMIN;?>/gallery">Галерея</a></li>
                    <li class="breadcrumb-item active">Нове(ові) зображення</li>
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
            <?php if(isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif;?>
            <?php if(isset($_SESSION['success'])) : ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                </div>
            <?php endif;?>
            <form action="<?=ADMIN;?>/gallery/add" method="post" enctype="multipart/form-data">
                <div class="box">
                    <div class="card card-danger file-upload">
                        <div class="card-header">
                            <h3 class="card-title">Забраження Галереї</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" ></button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="main" class="btn btn-success" data-url="gallery/add-image" data-name="main" multiple>Вибрати зображення</div>
                            <p><small>Максимальний розмір кожного зображеня не більше 3 мегабайт.</small></p>
                            <div class="main"></div>
                        </div>
                        <!-- /.card-body -->
                        <div class="overlay"><i class="fas fa-2x fa-sync-alt fa-spin"></i></div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success">Додати</button>
                </div>
            </form>
            <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']);?>
        </div>
    </div>
</section>
<!-- /.content -->