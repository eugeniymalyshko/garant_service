<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Панель керування</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Головна</a></li>
                    <li class="breadcrumb-item active">Панель керування</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div><!-- /.content-header -->
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?=$countReports;?></h3>
                        <p>Звітів</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-window-restore"></i>
                    </div>
                    <a href="<?=ADMIN . '/reports';?>" class="small-box-footer">Всі звіти <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?=$countNewTestimonials;?><sup style="font-size: 20px"></sup></h3>

                        <p>Нових Відгуків</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon far fa-comments"></i>
                    </div>
                    <a href="<?=ADMIN . '/testimonials';?>" class="small-box-footer">Всі відгуки <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
<!--            <div class="col-lg-3 col-6">-->
                <!-- small box -->
<!--                <div class="small-box bg-warning">-->
<!--                    <div class="inner">-->
<!--                        <h3>44</h3>-->
<!---->
<!--                        <p>User Registrations</p>-->
<!--                    </div>-->
<!--                    <div class="icon">-->
<!--                        <i class="ion ion-person-add"></i>-->
<!--                    </div>-->
<!--                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
<!--                </div>-->
<!--            </div>-->
            <!-- ./col -->
<!--            <div class="col-lg-3 col-6">-->
                <!-- small box -->
<!--                <div class="small-box bg-danger">-->
<!--                    <div class="inner">-->
<!--                        <h3>65</h3>-->
<!---->
<!--                        <p>Unique Visitors</p>-->
<!--                    </div>-->
<!--                    <div class="icon">-->
<!--                        <i class="ion ion-pie-graph"></i>-->
<!--                    </div>-->
<!--                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
<!--                </div>-->
<!--            </div>-->
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->